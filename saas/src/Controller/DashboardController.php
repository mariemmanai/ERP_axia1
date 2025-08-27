<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use App\Repository\DocumentsRepository;
use App\Repository\ArticlesRepository;
use App\Repository\StockRepository;
use App\Repository\DocumentsLigneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(
        DocumentsRepository $documentsRepository,
        ArticlesRepository $articlesRepository,
        StockRepository $stockRepository,
        DocumentsLigneRepository $documentsLignesRepository
    ): Response {
        $caMois = $documentsRepository->getChiffreAffairesMois();
        $evolutionCA = $documentsRepository->getEvolutionCA();
        $commandesEncours = $documentsRepository->countDocumentsByStatus('Ouvert');
        $evolutionCommandes = $documentsRepository->getEvolutionCommandes();
        $stocksFaibles = $stockRepository->findLowStock(10);
        $documentsAttente = $documentsRepository->countDocumentsByStatus('Sous traitement');

        $caData = $documentsRepository->getCADataLast6Months();
        $depensesData = $documentsRepository->getDepensesDataLast6Months();
        $moisLabels = $documentsRepository->getLast6MonthsLabels();

        $statsDocuments = $documentsRepository->getStatsByType();
        $documentsSeries = array_values($statsDocuments);
        $documentsLabels = array_keys($statsDocuments);

        $topArticles = $documentsLignesRepository->getTopArticles(5);
        $topArticlesValues = array_column($topArticles, 'total');
        $topArticlesLabels = array_column($topArticles, 'reference');

        $alertesStocks = $stockRepository->findLowStockWithDetails(5);
        $documentsRecents = $documentsRepository->findRecentDocuments(5);

        $activitesRecentes = [
            [
                'icon' => 'file-text',
                'titre' => 'Nouvelle facture créée',
                'description' => 'Facture FV25000001 pour Client Example',
                'date' => new \DateTime('-1 hour')
            ],
            [
                'icon' => 'shopping-cart',
                'titre' => 'Commande confirmée',
                'description' => 'Commande CA25000012 avec Fournisseur Example',
                'date' => new \DateTime('-3 hours')
            ],
            [
                'icon' => 'package',
                'titre' => 'Stock mis à jour',
                'description' => 'Réception de matières premières MP25000001',
                'date' => new \DateTime('-1 day')
            ]
        ];

        return $this->render('dashboard/index.html.twig', [
            'ca_mois' => $caMois,
            'evolution_ca' => $evolutionCA,
            'commandes_encours' => $commandesEncours,
            'evolution_commandes' => $evolutionCommandes,
            'stocks_faibles' => count($stocksFaibles),
            'documents_attente' => $documentsAttente,
            'ca_data' => json_encode($caData),
            'depenses_data' => json_encode($depensesData),
            'mois_labels' => json_encode($moisLabels),
            'stats_documents' => $statsDocuments,
            'documents_series' => json_encode($documentsSeries),
            'documents_labels' => json_encode($documentsLabels),
            'top_articles_values' => json_encode($topArticlesValues),
            'top_articles_labels' => json_encode($topArticlesLabels),
            'alertes_stocks' => $alertesStocks,
            'documents_recents' => $documentsRecents,
            'activites_recentes' => $activitesRecentes,
        ]);
    }
}
