<?php
// src/Middleware/AuthorizationMiddleware.php

namespace App\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AuthorizationMiddleware
{
    public function __construct(
        private AuthorizationCheckerInterface $authorizationChecker
    ) {}

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        // Mappage des routes aux permissions basé sur les fonctions de la base
        $routePermissions = [
            // Dashboard
            'admin_dashboard' => 'PERM_DASHBOARD_VIEW',
            
            // Module Achat
            'purchase_order_index' => 'PERM_PURCHASE_ORDER_VIEW',
            'purchase_order_show' => 'PERM_PURCHASE_ORDER_VIEW',
            'purchase_order_new' => 'PERM_PURCHASE_ORDER_MANAGE',
            'purchase_order_edit' => 'PERM_PURCHASE_ORDER_MANAGE',
            'purchase_order_delete' => 'PERM_PURCHASE_ORDER_MANAGE',
            
            'purchase_invoice_index' => 'PERM_PURCHASE_INVOICE_VIEW',
            'purchase_invoice_show' => 'PERM_PURCHASE_INVOICE_VIEW',
            'purchase_invoice_new' => 'PERM_PURCHASE_INVOICE_MANAGE',
            'purchase_invoice_edit' => 'PERM_PURCHASE_INVOICE_MANAGE',
            
            'transfer_note_index' => 'PERM_TRANSFER_NOTE_VIEW',
            'transfer_note_new' => 'PERM_TRANSFER_NOTE_MANAGE',
            
            'return_note_index' => 'PERM_RETURN_NOTE_VIEW',
            'return_note_new' => 'PERM_RETURN_NOTE_MANAGE',
            
            'entry_note_index' => 'PERM_ENTRY_NOTE_VIEW',
            'entry_note_new' => 'PERM_ENTRY_NOTE_MANAGE',
            
            'raw_material_inventory' => 'PERM_RAW_MATERIAL_INVENTORY_VIEW',
            
            // Module Vente
            'sales_order_index' => 'PERM_SALES_ORDER_VIEW',
            'sales_order_show' => 'PERM_SALES_ORDER_VIEW',
            'sales_order_new' => 'PERM_SALES_ORDER_MANAGE',
            'sales_order_edit' => 'PERM_SALES_ORDER_MANAGE',
            
            'sales_invoice_index' => 'PERM_SALES_INVOICE_VIEW',
            'sales_invoice_show' => 'PERM_SALES_INVOICE_VIEW',
            'sales_invoice_new' => 'PERM_SALES_INVOICE_MANAGE',
            
            'delivery_note_index' => 'PERM_DELIVERY_NOTE_VIEW',
            'delivery_note_new' => 'PERM_DELIVERY_NOTE_MANAGE',
            
            'finished_product_inventory' => 'PERM_FINISHED_PRODUCT_INVENTORY_VIEW',
            
            // Module Production
            'production_order_index' => 'PERM_PRODUCTION_ORDER_VIEW',
            'production_order_show' => 'PERM_PRODUCTION_ORDER_VIEW',
            'production_order_new' => 'PERM_PRODUCTION_ORDER_MANAGE',
            
            'exit_note_index' => 'PERM_EXIT_NOTE_VIEW',
            'exit_note_new' => 'PERM_EXIT_NOTE_MANAGE',
            
            // Administration
            'user_index' => 'PERM_USER_MANAGEMENT',
            'user_new' => 'PERM_USER_MANAGEMENT',
            'user_edit' => 'PERM_USER_MANAGEMENT',
            
            'profile_index' => 'PERM_PROFILE_MANAGEMENT',
            'profile_new' => 'PERM_PROFILE_MANAGEMENT',
            'profile_edit' => 'PERM_PROFILE_MANAGEMENT',
            
            'function_index' => 'PERM_FUNCTION_MANAGEMENT',
            
            // Statistiques
            'stats_sales' => 'PERM_STATS_SALES_VIEW',
            'stats_purchases' => 'PERM_STATS_PURCHASES_VIEW',
            'stats_materials' => 'PERM_STATS_MATERIALS_VIEW',
            'stats_products' => 'PERM_STATS_PRODUCTS_VIEW',
        ];

        // Ignorer les routes sans permissions (comme login, logout, etc.)
        if ($route === null || !array_key_exists($route, $routePermissions)) {
            return;
        }

        $permission = 'PERM_' . strtoupper($routePermissions[$route]);
        
        if (!$this->authorizationChecker->isGranted($permission)) {
            throw new AccessDeniedException('Vous n\'avez pas les droits nécessaires pour accéder à cette page');
        }
    }
}