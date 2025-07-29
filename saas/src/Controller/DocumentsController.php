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
use App\Repository\UsersRepository;


#[Route('/documents')]
class DocumentsController extends AbstractController
{
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    #[Route('/', name: 'app_documents_index', methods: ['GET'])]
    public function index(Request $request, DocumentsRepository $documentsRepository): Response
    {
        $filter = $request->query->get('filter');

        $documents = match ($filter) {
            'devis_achat' => $documentsRepository->findByType('Devis achat'),
            'commandes_achat' => $documentsRepository->findByType('Commande achat'),
            'factures_achat' => $documentsRepository->findByType('Facture achat'),
            'factures_achat_avoire' => $documentsRepository->findByType('Facture achat avoire'),
            'bon_entree' => $documentsRepository->findByType('Bon d\'entrée'),
            'bon_transfert' => $documentsRepository->findByType('Bon de transfert'),
            'bon_retour' => $documentsRepository->findByType('Bon de retour'),

            // Ventes
            'devis_vente' => $documentsRepository->findByType('Devis vente'),
            'commandes_vente' => $documentsRepository->findByType('Commande vente'),
            'factures_vente' => $documentsRepository->findByType('Facture vente'),
            'factures_vente_avoire' => $documentsRepository->findByType('Facture vente avoire'),
            'bon_sortie' => $documentsRepository->findByType('Bon de sortie'),
            'bon_livraison' => $documentsRepository->findByType('Bon de livraison'),

            // Commun
            'inventaire' => $documentsRepository->findByType('Inventaire'),
            // Production (ajouter si nécessaire)
            'creation_of' => $documentsRepository->findByType('Création OF'),
            'demande_besoins' => $documentsRepository->findByType('Demande besoins'),
            default => $documentsRepository->findAll()
        };
        return $this->render('documents/index.html.twig', [
            'documents' => $documents
        ]);
    }
    #[Route('/new', name: 'app_documents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UsersRepository $usersRepository): Response
    {
        $document = new Documents();
        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rootUser = $usersRepository->find(49);
            if (!$rootUser) {
                throw $this->createNotFoundException('Utilisateur root (id=49) non trouvé');
            }
            $document->setCreateBy($rootUser);
            $reference = $entityManager->getRepository(Documents::class)
                ->getNextReference($document->getType());
            $document->setReference($reference);
            foreach ($document->getLignes() as $ligne) {
                $ligne->setDocument($document);
                $ligne->calculatePrixTotalHt();
            }
            $document->updateTotals();

            $entityManager->persist($document);
            $entityManager->flush();

            $this->addFlash('success', 'Document créé avec succès!');
            return $this->redirectToRoute('app_documents_index');
        }

        return $this->render('documents/new&edit.html.twig', [
            'form' => $form->createView(),
            'document' => $document,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_documents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documents $document, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DocumentsType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $document->updateTotals();
            $entityManager->flush();

            $this->addFlash('success', 'Document mis à jour avec succès!');
            return $this->redirectToRoute('app_documents_index');
        }

        return $this->render('documents/new&edit.html.twig', [
            'form' => $form->createView(),
            'document' => $document,
        ]);
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
