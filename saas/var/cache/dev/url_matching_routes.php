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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles_index', '_controller' => 'App\\Controller\\ArticlesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/new' => [[['_route' => 'app_articles_new', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depots' => [[['_route' => 'app_depots_index', '_controller' => 'App\\Controller\\DepotsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/depots/new' => [[['_route' => 'app_depots_new', '_controller' => 'App\\Controller\\DepotsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents' => [[['_route' => 'app_documents_index', '_controller' => 'App\\Controller\\DocumentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documents/new' => [[['_route' => 'app_documents_new', '_controller' => 'App\\Controller\\DocumentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/functions' => [[['_route' => 'app_functions_index', '_controller' => 'App\\Controller\\FunctionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/functions/new' => [[['_route' => 'app_functions_new', '_controller' => 'App\\Controller\\FunctionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nomenclature' => [[['_route' => 'app_nomenclature_index', '_controller' => 'App\\Controller\\NomenclatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nomenclature/new' => [[['_route' => 'app_nomenclature_new', '_controller' => 'App\\Controller\\NomenclatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profiles' => [[['_route' => 'app_profiles_index', '_controller' => 'App\\Controller\\ProfilesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profiles/new' => [[['_route' => 'app_profiles_new', '_controller' => 'App\\Controller\\ProfilesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\RegistrationController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\RegistrationController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/landing' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\RegistrationController::landing'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\RegistrationController::home'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock_index', '_controller' => 'App\\Controller\\StockController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/articles/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/d(?'
                    .'|epots/([^/]++)(?'
                        .'|(*:275)'
                        .'|/edit(*:288)'
                        .'|(*:296)'
                    .')'
                    .'|ocuments/([^/]++)(?'
                        .'|(*:325)'
                        .'|/edit(*:338)'
                        .'|(*:346)'
                    .')'
                .')'
                .'|/functions/([^/]++)(?'
                    .'|(*:378)'
                    .'|/edit(*:391)'
                    .'|(*:399)'
                .')'
                .'|/nomenclature/([^/]++)/(?'
                    .'|show(*:438)'
                    .'|delete(*:452)'
                .')'
                .'|/profiles/([^/]++)(?'
                    .'|/edit(*:487)'
                    .'|(*:495)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_depots_show', '_controller' => 'App\\Controller\\DepotsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_depots_edit', '_controller' => 'App\\Controller\\DepotsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'app_depots_delete', '_controller' => 'App\\Controller\\DepotsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'app_documents_show', '_controller' => 'App\\Controller\\DocumentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_documents_edit', '_controller' => 'App\\Controller\\DocumentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'app_documents_delete', '_controller' => 'App\\Controller\\DocumentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_functions_show', '_controller' => 'App\\Controller\\FunctionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_functions_edit', '_controller' => 'App\\Controller\\FunctionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'app_functions_delete', '_controller' => 'App\\Controller\\FunctionsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'nomenclature_show', '_controller' => 'App\\Controller\\NomenclatureController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        452 => [[['_route' => 'nomenclature_delete', '_controller' => 'App\\Controller\\NomenclatureController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        487 => [[['_route' => 'app_profiles_edit', '_controller' => 'App\\Controller\\ProfilesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        495 => [
            [['_route' => 'app_profiles_delete', '_controller' => 'App\\Controller\\ProfilesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
