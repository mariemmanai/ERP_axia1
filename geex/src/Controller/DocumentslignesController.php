<?php
namespace App\Controller;

use App\Entity\Documentslignes;
use App\Entity\Documents;
use App\Form\DocumentslignesType;
use App\Repository\DocumentsligneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dl')]
class DocumentslignesController extends AbstractController
{
#[Route('/{id}', name: 'app_documentslignes_index', methods: ['GET'])]
public function index(Documents $document, DocumentsligneRepository $documentsligneRepository): Response
{
    return $this->render('documentslignes/index.html.twig', [
        'document' => $document,
    ]);
}
#[Route('/new/{documentId}', name: 'app_documentslignes_new', methods: ['GET', 'POST'])]
public function new(Request $request, int $documentId, EntityManagerInterface $entityManager): Response
{
    $documentsligne = new Documentslignes();
    $document = $entityManager->getRepository(Documents::class)->find($documentId);
    
    if (!$document) {
        throw $this->createNotFoundException('Document not found');
    }
    
    $documentsligne->setDocument($document);
    
    $form = $this->createForm(DocumentslignesType::class, $documentsligne);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($documentsligne->getQte() !== null && $documentsligne->getPrixUnitaireHt() !== null) {
            $prixTotal = $documentsligne->getQte() * $documentsligne->getPrixUnitaireHt();
            
            if ($documentsligne->getRemise() !== null) {
                $remise = $documentsligne->getRemise() / 100;
                $prixTotal = $prixTotal * (1 - $remise);
            }
            
            $documentsligne->setPrixTotalHt($prixTotal);
        }
        
        $entityManager->persist($documentsligne);
        $entityManager->flush();

        return $this->redirectToRoute('app_documentslignes_index', [
            'id' => $documentId
        ], Response::HTTP_SEE_OTHER);
    }

    return $this->render('documentslignes/new&edit.html.twig', [
        'documentsligne' => $documentsligne,
        'form' => $form->createView(),
        'documentId' => $documentId
    ]);
}

#[Route('/{id}/edit', name: 'app_documentslignes_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Documentslignes $documentsligne, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(DocumentslignesType::class, $documentsligne);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($documentsligne->getQte() !== null && $documentsligne->getPrixUnitaireHt() !== null) {
            $prixTotal = $documentsligne->getQte() * $documentsligne->getPrixUnitaireHt();
            if ($documentsligne->getRemise() !== null) {
                $remise = $documentsligne->getRemise() / 100;
                $prixTotal = $prixTotal * (1 - $remise);
            }
            
            $documentsligne->setPrixTotalHt($prixTotal);
        }
        
        $entityManager->flush();

        return $this->redirectToRoute('app_documentslignes_index', [
            'id' => $documentsligne->getDocument()->getId()
        ], Response::HTTP_SEE_OTHER);
    }

    return $this->render('documentslignes/new&edit.html.twig', [
        'documentsligne' => $documentsligne,
        'form' => $form->createView(),
        'documentId' => $documentsligne->getDocument()->getId()
    ]);
}

    #[Route('/{id}', name: 'app_documentslignes_show', methods: ['GET'])]
    public function show(Documentslignes $documentsligne): Response
    {
        return $this->render('documentslignes/show.html.twig', [
            'documentsligne' => $documentsligne,
        ]);
    }


    #[Route('/{id}', name: 'app_documentslignes_delete', methods: ['POST'])]
    public function delete(Request $request, Documentslignes $documentsligne, EntityManagerInterface $entityManager): Response
    {
        $documentId = $documentsligne->getDocument()->getId();
        
        if ($this->isCsrfTokenValid('delete'.$documentsligne->getId(), $request->request->get('_token'))) {
            $entityManager->remove($documentsligne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_documentslignes_index', [
            'documentId' => $documentId
        ], Response::HTTP_SEE_OTHER);
    }
}