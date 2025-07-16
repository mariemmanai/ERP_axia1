<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\DocumentsType;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DocumentsRepository;
use App\Entity\Documents;

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
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $document = new Documents();

        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->calculateDocumentTotals($document);

            $em->persist($document);
            $em->flush();

            $this->addFlash('success', 'Document créé avec succès.');
            return $this->redirectToRoute('app_documents_index');
        }

        return $this->render('documents/new&edit.html.twig', [
            'form' => $form->createView(),
            'document' => $document,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_documents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documents $document, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->calculateDocumentTotals($document);

            $em->flush();
            $this->addFlash('success', 'Document modifié avec succès.');

            return $this->redirectToRoute('app_documents_index');
        }

        return $this->render('documents/new&edit.html.twig', [
            'form' => $form->createView(),
            'document' => $document,
        ]);
    }

    private function calculateDocumentTotals(Documents $document): void
    {
        $montantHt = 0;
        foreach ($document->getLignes() as $ligne) {
            $prixTotal = $ligne->getPrixUnitaireHt() * $ligne->getQte();
            if ($ligne->getRemise()) {
                $prixTotal *= (1 - $ligne->getRemise() / 100);
            }
            $ligne->setPrixTotalHt($prixTotal);
            $montantHt += $prixTotal;
        }

        $document->setMontantHt($montantHt);

        $tauxTva = $document->getTauxTva() ?? 0;
        $montantTva = $montantHt * ($tauxTva / 100);
        $document->setMontantTva($montantTva);

        $montantTtc = $montantHt + $montantTva;
        $retenue = $document->getRetenu() ?? 0;
        $montantRetenu = $montantTtc * $retenue / 100;
        $timbre = $document->getTimbre() ?? 0;
        $montantAPayer = $montantTtc - $montantRetenu + $timbre;

        $document->setMontantAPayer($montantAPayer);
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
}
