<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/todo' => [[['_route' => 'todo', '_controller' => 'App\\Controller\\AppController::todo'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\AppController::chat'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\AppController::calendar'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles_index', '_controller' => 'App\\Controller\\ArticlesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/new' => [[['_route' => 'app_articles_new', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depots' => [[['_route' => 'app_depots_index', '_controller' => 'App\\Controller\\DepotsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/depots/new' => [[['_route' => 'app_depots_new', '_controller' => 'App\\Controller\\DepotsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents' => [[['_route' => 'app_documents_index', '_controller' => 'App\\Controller\\DocumentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documents/new' => [[['_route' => 'app_documents_new', '_controller' => 'App\\Controller\\DocumentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\FeaturesController::chart'], null, null, null, false, false, null]],
        '/badge' => [[['_route' => 'badge', '_controller' => 'App\\Controller\\FeaturesController::badge'], null, null, null, false, false, null]],
        '/button' => [[['_route' => 'button', '_controller' => 'App\\Controller\\FeaturesController::button'], null, null, null, false, false, null]],
        '/color' => [[['_route' => 'color', '_controller' => 'App\\Controller\\FeaturesController::color'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'form', '_controller' => 'App\\Controller\\FeaturesController::form'], null, null, null, false, false, null]],
        '/icon' => [[['_route' => 'icon', '_controller' => 'App\\Controller\\FeaturesController::icon'], null, null, null, false, false, null]],
        '/navigation' => [[['_route' => 'navigation', '_controller' => 'App\\Controller\\FeaturesController::navigation'], null, null, null, false, false, null]],
        '/typography' => [[['_route' => 'typography', '_controller' => 'App\\Controller\\FeaturesController::typography'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index2' => [[['_route' => 'index2', '_controller' => 'App\\Controller\\HomeController::index2'], null, null, null, false, false, null]],
        '/index3' => [[['_route' => 'index3', '_controller' => 'App\\Controller\\HomeController::index3'], null, null, null, false, false, null]],
        '/index4' => [[['_route' => 'index4', '_controller' => 'App\\Controller\\HomeController::index4'], null, null, null, false, false, null]],
        '/nomenclature' => [[['_route' => 'nomenclature_index', '_controller' => 'App\\Controller\\NomenclatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nomenclature/new' => [[['_route' => 'app_nomenclature_new', '_controller' => 'App\\Controller\\NomenclatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\PagesController::blog'], null, null, null, false, false, null]],
        '/blog-details' => [[['_route' => 'blogDetails', '_controller' => 'App\\Controller\\PagesController::blblogDetailsog'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\PagesController::faq'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\PagesController::pricing'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'testimonial', '_controller' => 'App\\Controller\\PagesController::testimonial'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'terms', '_controller' => 'App\\Controller\\PagesController::terms'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\PagesController::signin'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'forgot-password', '_controller' => 'App\\Controller\\PagesController::forgetPassword'], null, null, null, false, false, null]],
        '/verification' => [[['_route' => 'verification', '_controller' => 'App\\Controller\\PagesController::verification'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\PagesController::error'], null, null, null, false, false, null]],
        '/coming-soon' => [[['_route' => 'comingSoon', '_controller' => 'App\\Controller\\PagesController::commingSoon'], null, null, null, false, false, null]],
        '/maintenance' => [[['_route' => 'maintenance', '_controller' => 'App\\Controller\\PagesController::maintenance'], null, null, null, false, false, null]],
        '/blank-page' => [[['_route' => 'blankPage', '_controller' => 'App\\Controller\\PagesController::blankPage'], null, null, null, false, false, null]],
        '/landing' => [[['_route' => 'landing', '_controller' => 'App\\Controller\\PagesController::landing'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'sign-up', '_controller' => 'App\\Controller\\RegistrationController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null],
            [['_route' => 'signup', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\RegistrationController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock_index', '_controller' => 'App\\Controller\\StockController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/new' => [[['_route' => 'app_stock_new', '_controller' => 'App\\Controller\\StockController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\UsersController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/articles/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/d(?'
                    .'|epots/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                    .'|ocuments/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                    .'|l/(?'
                        .'|([^/]++)(*:335)'
                        .'|new/([^/]++)(*:355)'
                        .'|([^/]++)(?'
                            .'|/edit(*:379)'
                            .'|(*:387)'
                        .')'
                    .')'
                .')'
                .'|/nomenclature/([^/]++)/(?'
                    .'|show(*:428)'
                    .'|delete(*:442)'
                .')'
                .'|/stock/([^/]++)(?'
                    .'|(*:469)'
                    .'|/edit(*:482)'
                    .'|(*:490)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:517)'
                    .'|/edit(*:530)'
                    .'|(*:538)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_depots_show', '_controller' => 'App\\Controller\\DepotsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_depots_edit', '_controller' => 'App\\Controller\\DepotsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_depots_delete', '_controller' => 'App\\Controller\\DepotsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_documents_show', '_controller' => 'App\\Controller\\DocumentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_documents_edit', '_controller' => 'App\\Controller\\DocumentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_documents_delete', '_controller' => 'App\\Controller\\DocumentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_documentslignes_index', '_controller' => 'App\\Controller\\DocumentslignesController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_documentslignes_new', '_controller' => 'App\\Controller\\DocumentslignesController::new'], ['documentId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        379 => [[['_route' => 'app_documentslignes_edit', '_controller' => 'App\\Controller\\DocumentslignesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [
            [['_route' => 'app_documentslignes_show', '_controller' => 'App\\Controller\\DocumentslignesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_documentslignes_delete', '_controller' => 'App\\Controller\\DocumentslignesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        428 => [[['_route' => 'nomenclature_show', '_controller' => 'App\\Controller\\NomenclatureController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        442 => [[['_route' => 'nomenclature_delete', '_controller' => 'App\\Controller\\NomenclatureController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        469 => [[['_route' => 'app_stock_show', '_controller' => 'App\\Controller\\StockController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_stock_edit', '_controller' => 'App\\Controller\\StockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        490 => [[['_route' => 'app_stock_delete', '_controller' => 'App\\Controller\\StockController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        517 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
