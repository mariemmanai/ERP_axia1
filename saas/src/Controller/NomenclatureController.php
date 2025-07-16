<?php

namespace App\Controller;

use App\Entity\Nomenclature;
use App\Entity\Articles;
use App\Form\NomenclatureType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Psr\Log\LoggerInterface;

#[Route('/nomenclature')]
class NomenclatureController extends AbstractController
{
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    #[Route('/', name: 'nomenclature_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $nomenclatures = $entityManager->getRepository(Nomenclature::class)
            ->createQueryBuilder('n')
            ->leftJoin('n.compositions', 'c')
            ->addSelect('c')
            ->leftJoin('c.matiere', 'm')
            ->addSelect('m')
            ->getQuery()
            ->getResult();

        return $this->render('nomenclature/index.html.twig', [
            'nomenclatures' => $nomenclatures
        ]);
    }


    #[Route('/new', name: 'nomenclature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nomenclature = new Nomenclature();
        $form = $this->createForm(NomenclatureType::class, $nomenclature);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $request->request->all();
            $this->logger->info('JSON log entry', ['json_data' => json_encode($data)]);

            $produit = $data['nomenclature']['produit'];
            $produit = $entityManager->getRepository(Articles::class)->find($produit);
            $compositions = $data['nomenclature']['compositions'];

            foreach ($compositions as $composition) {
                $matiere = $composition['matiere'];
                $matiere = $entityManager->getRepository(Articles::class)->find($matiere);
                $consommation = $composition['consommation'];

                $nomenclature = new Nomenclature();
                $nomenclature->setProduit($produit);
                $nomenclature->setMatiere($matiere);
                $nomenclature->setConsommation($consommation);

                $entityManager->persist($nomenclature);
            }

            $entityManager->flush();
            // $compositions = $nomenclature->getCompositions();
            // foreach ($compositions as $key => $composition) {
            //     if (!$composition->getMatiere() || !$composition->getConsommation()) {
            //         $nomenclature->removeComposition($composition);
            //         $entityManager->remove($composition); // Important: supprimer de l'EntityManager
            //     } else {
            //         $composition->setNomenclature($nomenclature);
            //     }
            // }
            // $entityManager->persist($nomenclature);
            // $entityManager->flush();
            // return $this->redirectToRoute('nomenclature_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('nomenclature/new.html.twig', ['form' => $form->createView(),]);
    }
    #[Route('/{id}', name: 'nomenclature_show', methods: ['GET'])]
    public function show(Nomenclature $nomenclature, EntityManagerInterface $em): Response
    {
        $compositions = $em->getRepository(Nomenclature::class)
            ->findBy(['produit' => $nomenclature->getProduit()]);

        return $this->render('nomenclature/show.html.twig', [
            'nomenclature' => $nomenclature,
            'compositions' => $compositions
        ]);
    }

    #[Route('/{id}/edit', name: 'nomenclature_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Nomenclature $nomenclature, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NomenclatureType::class, $nomenclature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('nomenclature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('nomenclature/edit.html.twig', [
            'nomenclature' => $nomenclature,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'nomenclature_delete', methods: ['POST'])]
    public function delete(Request $request, Nomenclature $nomenclature, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $nomenclature->getId(), $request->request->get('_token'))) {
            $entityManager->remove($nomenclature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('nomenclature_index', [], Response::HTTP_SEE_OTHER);
    }
}
