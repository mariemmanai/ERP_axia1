<?php
namespace App\Controller;

use App\Entity\Nomenclature;
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
    $produitsFinis = $nomenclatureRepository->findAll();

    return $this->render('nomenclature/index.html.twig', [
        'produitsFinis' => $produitsFinis, 
    ]);
}

    #[Route('/new', name: 'app_nomenclature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $nomenclat = new Nomenclature();
        $form = $this->createForm(NomenclatureType::class, $nomenclat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($nomenclat);
            $em->flush();
            $this->addFlash('success', 'Ligne ajoutée à la nomenclature.');
            return $this->redirectToRoute('nomenclature_index');
        }

        return $this->render('nomenclature/new&edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/show', name: 'nomenclature_show', methods: ['GET'])]
    public function show(Nomenclature $nomenclat): Response
    {
        return $this->render('nomenclature/show.html.twig', [
            'nomenclature' => $nomenclat
        ]);
    }

    #[Route('/{id}/delete', name: 'nomenclature_delete', methods: ['POST'])]
    public function delete(Request $request, Nomenclature $nomenclat, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nomenclat->getId(), $request->request->get('_token'))) {
            $em->remove($nomenclat);
            $em->flush();
        }

        return $this->redirectToRoute('nomenclature_index');
    }
}
