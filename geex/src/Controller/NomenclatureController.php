<?php

namespace App\Controller;

use App\Entity\Numenclat;
use App\Form\NomenclatureType;
use App\Repository\NomenclatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/nomenclature')]
class NomenclatureController extends AbstractController
{
    #[Route('/', name: 'app_nomenclature_index', methods: ['GET'])]
public function index(NomenclatureRepository $nomenclatureRepository): Response
{
    return $this->render('nomenclature/index.html.twig', [
        'numenclats' => $nomenclatureRepository->findAllWithProduitAndMatiere(),
    ]);
}

    #[Route('/new', name: 'app_nomenclature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NomenclatureRepository $nomenclatureRepository): Response
    {
        $nomenclature = new Numenclat();
        $form = $this->createForm(NomenclatureType::class, $nomenclature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nomenclatureRepository->save($nomenclature, true);

            $this->addFlash('success', 'Nomenclature créée avec succès.');
            return $this->redirectToRoute('app_nomenclature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('nomenclature/new&edit.html.twig', [
            'nomenclature' => $nomenclature,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_nomenclature_show', methods: ['GET'])]
    public function show(Numenclat $nomenclature): Response
    {
        return $this->render('nomenclature/show.html.twig', [
            'nomenclature' => $nomenclature,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_nomenclature_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Numenclat $nomenclature, NomenclatureRepository $nomenclatureRepository): Response
    {
        $form = $this->createForm(NomenclatureType::class, $nomenclature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nomenclatureRepository->save($nomenclature, true);

            $this->addFlash('success', 'Nomenclature mise à jour avec succès.');
            return $this->redirectToRoute('app_nomenclature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('nomenclature/new&edit.html.twig', [
            'nomenclature' => $nomenclature,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_nomenclature_delete', methods: ['POST'])]
    public function delete(Request $request, Numenclat $nomenclature, NomenclatureRepository $nomenclatureRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nomenclature->getId(), $request->request->get('_token'))) {
            $nomenclatureRepository->remove($nomenclature, true);
            $this->addFlash('success', 'Nomenclature supprimée avec succès.');
        }

        return $this->redirectToRoute('app_nomenclature_index', [], Response::HTTP_SEE_OTHER);
    }
}