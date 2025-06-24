<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\StockType;
use App\Repository\StockRepository;
use App\Repository\ArticlesRepository;
use App\Repository\DepotsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/stock')]
class StockController extends AbstractController
{
    #[Route('/', name: 'app_stock_index', methods: ['GET'])]
public function index(StockRepository $stockRepository): Response
{
    return $this->render('stock/index.html.twig', [
        'stocks' => $stockRepository->findAllWithArticlesAndDepots(),
    ]);
}

    #[Route('/new', name: 'app_stock_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request, 
        StockRepository $stockRepository,
        ArticlesRepository $articlesRepository,
        DepotsRepository $depotsRepository
    ): Response
    {
        $stock = new Stock();
        $stock->setDateEntree(new \DateTime());
        
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingStock = $stockRepository->findByArticleAndDepot(
                $stock->getArticle()->getId(),
                $stock->getDepot()->getId()
            );

            if ($existingStock) {
                $this->addFlash('warning', 'Un stock existe déjà pour cet article dans ce dépôt.');
                return $this->redirectToRoute('app_stock_edit', ['id' => $existingStock->getId()]);
            }

            $stockRepository->save($stock, true);
            $this->addFlash('success', 'Stock créé avec succès.');
            return $this->redirectToRoute('app_stock_index');
        }

        return $this->render('stock/new&edit.html.twig', [
            'stock' => $stock,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_stock_show', methods: ['GET'])]
    public function show(Stock $stock): Response
    {
        return $this->render('stock/show.html.twig', [
            'stock' => $stock,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_stock_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Stock $stock, 
        StockRepository $stockRepository
    ): Response
    {
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $stockRepository->save($stock, true);
            $this->addFlash('success', 'Stock mis à jour avec succès.');
            return $this->redirectToRoute('app_stock_index');
        }

        return $this->render('stock/new&edit.html.twig', [
            'stock' => $stock,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_stock_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Stock $stock, 
        StockRepository $stockRepository
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stock->getId(), $request->request->get('_token'))) {
            $stockRepository->remove($stock, true);
            $this->addFlash('success', 'Stock supprimé avec succès.');
        }

        return $this->redirectToRoute('app_stock_index');
    }
}