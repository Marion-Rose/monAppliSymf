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
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'app_admin_insert', '_controller' => 'App\\Controller\\AdminController::insert'], null, null, null, false, false, null],
            [['_route' => 'app_admin_update', '_controller' => 'App\\Controller\\AdminController::update'], null, null, null, false, false, null],
            [['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], null, null, null, false, false, null],
        ],
        '/insert' => [[['_route' => 'insert', '_controller' => 'App\\Controller\\AdminController::insert'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\ListeProduitsController::liste'], null, null, null, false, false, null]],
        '/distrib' => [[['_route' => 'distributeurs', '_controller' => 'App\\Controller\\ListeProduitsController::listedistributeur'], null, null, null, false, false, null]],
        '/eager' => [[['_route' => 'eager', '_controller' => 'App\\Controller\\ListeProduitsController::eager'], null, null, null, false, false, null]],
        '/apitest' => [[['_route' => 'apitest', '_controller' => 'App\\Controller\\ListeProduitsController::apiTest'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\MailController::sendEmail'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/testroute' => [[['_route' => 'index', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors(?:/(\\d+))?(*:70)'
                        .'|validation_errors/([^/]++)(*:103)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:140)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:174)'
                            .'|istributeurs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:223)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:249)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:287)'
                                .')'
                            .')'
                        .')'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:329)'
                        .'|produits(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:374)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:400)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:438)'
                            .')'
                        .')'
                        .'|references(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:487)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:513)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:551)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:594)'
                    .'|wdt/([^/]++)(*:614)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:660)'
                            .'|router(*:674)'
                            .'|exception(?'
                                .'|(*:694)'
                                .'|\\.css(*:707)'
                            .')'
                        .')'
                        .'|(*:717)'
                    .')'
                .')'
                .'|/update/([^/]++)(*:743)'
                .'|/delete/([^/]++)(*:767)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], null, null, false, true, null]],
        103 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        174 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        223 => [[['_route' => '_api_/distributeurs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        249 => [
            [['_route' => '_api_/distributeurs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/distributeurs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        287 => [
            [['_route' => '_api_/distributeurs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/distributeurs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/distributeurs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Distributeur', '_api_operation_name' => '_api_/distributeurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        329 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        374 => [[['_route' => '_api_/produits/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        400 => [
            [['_route' => '_api_/produits{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/produits{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        438 => [
            [['_route' => '_api_/produits/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        487 => [[['_route' => '_api_/references/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        513 => [
            [['_route' => '_api_/references{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/references{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        551 => [
            [['_route' => '_api_/references/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/references/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/references/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Reference', '_api_operation_name' => '_api_/references/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        594 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        614 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        660 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        674 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        694 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        707 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        717 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        743 => [[['_route' => 'update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], null, null, false, true, null]],
        767 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
