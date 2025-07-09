<?php

namespace App\Controller;

use App\Entity\Documents;
use App\Entity\Documentslignes;
use Doctrine\Common\Collections\ArrayCollection;
use App\Form\DocumentsType;
use App\Repository\DocumentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

#[Route('/documents')]

class DocumentsController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    #[Route('/', name: 'app_documents_index', methods: ['GET'])]
    public function index(DocumentsRepository $documentsRepository): Response
    {
        return $this->render('documents/index.html.twig', [
            'documents' => $documentsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_documents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $document = new Documents();
        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($document);
            foreach ($document->getLignes() as $ligne) {
                $ligne->setDocument($document);
                $entityManager->persist($ligne);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Document créé avec succès');
            return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('documents/new&edit.html.twig', [
            'document' => $document,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_documents_show', methods: ['GET'])]
    public function show(
        Documents $document,
        DocumentsRepository $documentsRepository
    ): Response {
        $document = $documentsRepository->find($document->getId());
        return $this->render('documents/show.html.twig', [
            'document' => $document,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_documents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documents $document, EntityManagerInterface $entityManager): Response
    {
        try {

            $originalLignes = new ArrayCollection();
            foreach ($document->getLignes() as $ligne) {
                $originalLignes->add($ligne);
            }

            $form = $this->createForm(DocumentsType::class, $document);
            $form->handleRequest($request);
            $this->logger->info('Form submitted successfully');

            if ($form->isSubmitted() && $form->isValid()) {
                dump($form->getData());
                dd($document);
                foreach ($originalLignes as $ligne) {
                    if (false === $document->getLignes()->contains($ligne)) {
                        $ligne->setDocument(null);
                        $entityManager->remove($ligne);
                    }
                }
                foreach ($document->getLignes() as $ligne) {
                    $ligne->setDocument($document);
                    if (!$entityManager->contains($ligne)) {
                        $entityManager->persist($ligne);
                    }
                }
                $document->setMontantHt($form->get('montantHt')->getData());
                $document->setMontantTva($form->get('montantTva')->getData());
                $document->setMontantAPayer($form->get('montantAPayer')->getData());
                $entityManager->flush();

                $this->addFlash('success', 'Document mis à jour avec succès');
                return $this->redirectToRoute('app_documents_index');
            }

            return $this->render('documents/new&edit.html.twig', [
                'document' => $document,
                'form' => $form->createView(),
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour du document : ' . $e->getMessage());
            return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/{id}/editDoc', name: 'app_documents_edit2', methods: ['PUT'])]
    public function editDoc(Request $request, Documents $document, EntityManagerInterface $entityManager): Response
    {
        try {
            $this->logger->info('Editing document with ID: ' . $document->getId());
            if ($request->request->all()) {
                $this->logger->info('Request data: ' . json_encode($request->request->all()));
                $this->logger->info('Document: ' . json_encode($document));
                $document = $document->getId();
                $requestData = $request->request->all();
                $DocDate = new \DateTime($requestData['docDate']);

                $Doc = $entityManager->getRepository(Documents::class)->findOneBy(['id' => $document]);
                if (!$Doc) {
                    throw new \Exception('Document not found');
                }
                $this->logger->info('Document data: ' . json_encode($Doc));
                $Doc->setDocDate($DocDate)
                    ->setStatus($requestData['status'])
                    ->setEmetteur($requestData['emetteur'])
                    ->setDestinataire($requestData['destinataire'])
                    ->setTauxTva($requestData['tauxTva'])
                    ->setMontantTva($requestData['montantTva'])
                    ->setMontantAPayer($requestData['montantAPayer'])
                    ->setTimbre($requestData['timbre'])
                    ->setRetenu($requestData['retenu']);
                $entityManager->persist($Doc);

                $DocLigne = $entityManager->getRepository(Documentslignes::class)->findAllBy(['document' => $document]);
                if (!$DocLigne) {
                    throw new \Exception('Document lignes not found');
                }
                $this->logger->info('Lignes Document data: ' . json_encode($DocLigne));
                foreach ($DocLigne as $ligne) {
                    $entityManager->remove($ligne);
                }

                $lignes = $requestData['lignes'];
                foreach ($lignes as $ligne) {
                    $newLigne = new Documentslignes();
                    $newLigne->setDocument($Doc)
                        ->setDocument($document)
                        ->setArticle($ligne['article'])
                        ->setQte($ligne['qte'])
                        ->setPrixUnitaireHt($ligne['prixUnitaireHt'])
                        ->setRemise($ligne['remise'])
                        ->setPrixTotalHt($ligne['prixTotalHt']);
                    $entityManager->persist($newLigne);
                }
                $entityManager->flush();
                return throw new \Exception('Document updated successfully');
            }
            return throw new \Exception('Document updated successfully');
        } catch (\Exception $e) {
            $this->logger->error('Error updating document: ' . $e->getMessage());
            $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour du document : ' . $e->getMessage());
            return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/{id}', name: 'app_documents_delete', methods: ['POST'])]
    public function delete(Request $request, Documents $document, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $document->getId(), $request->request->get('_token'))) {
            foreach ($document->getLignes() as $ligne) {
                $entityManager->remove($ligne);
            }

            $entityManager->remove($document);
            $entityManager->flush();

            $this->addFlash('success', 'Document supprimé avec succès');
        }

        return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
    }

    private function calculateDocumentTotals(Documents $document): void
    {
        $montantHt = 0;

        foreach ($document->getLignes() as $ligne) {
            if (!$ligne->getPrixTotalHt()) {
                $prixTotal = $ligne->getPrixUnitaireHt() * $ligne->getQte();
                if ($ligne->getRemise()) {
                    $prixTotal *= (1 - $ligne->getRemise() / 100);
                }
                $ligne->setPrixTotalHt($prixTotal);
            }

            $montantHt += $ligne->getPrixTotalHt();
        }

        $document->setMontantHt($montantHt);
        $tauxTva = $document->getTauxTva() ?? 0;
        $montantTva = $montantHt * (1 + ($tauxTva / 100));
        $document->setMontantTva($montantTva);
        $montantTtc = $montantHt + $montantTva;
        $retenue = $document->getRetenu() ?? 0;
        $montantRetenu = $montantTtc * $retenue / 100;
        $timbre = $document->getTimbre() ?? 0;
        $montantAPayer = $montantTtc - $montantRetenu + $timbre;
        $document->setMontantAPayer($montantAPayer);
    }
}
