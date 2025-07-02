<?php

namespace App\Controller;

use App\Entity\Documents;
use App\Entity\Documentslignes;
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
            if (!$document->getDocDate()) {
                $document->setDocDate(new \DateTime());
            }
            $this->calculateDocumentTotals($document);

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
        try{
        $this->logger->info('Editing document', ['request_content' => $request->getContent()]);
        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $originalLignes = [];
            foreach ($document->getLignes() as $ligne) {
                $originalLignes[] = $ligne;
            }

            foreach ($document->getLignes() as $ligne) {
                $ligne->setDocument($document);
                $entityManager->persist($ligne);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Document mis à jour avec succès');
            return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('documents/new&edit.html.twig', [
            'document' => $document,
            'form' => $form->createView(),
        ]);
    }catch(\Exception $e){
        $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour du document : ' . $e->getMessage());
        return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/{id}', name: 'app_documents_delete', methods: ['POST'])]
    public function delete(Request $request, Documents $document, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->request->get('_token'))) {
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
    $montantTva = $montantHt * (1 +($tauxTva / 100));
    $document->setMontantTva($montantTva);
    $montantTtc = $montantHt + $montantTva;
    $retenue = $document->getRetenu() ?? 0;
    $montantRetenu = $montantTtc * $retenue / 100;
    $timbre = $document->getTimbre() ?? 0;
    $montantAPayer = $montantTtc - $montantRetenu + $timbre;
    $document->setMontantAPayer($montantAPayer);
}
}