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
        '/admin/dashboard' => [[['_route' => 'app_back_dashboard', '_controller' => 'App\\Controller\\BackController::dashboard'], null, null, null, false, false, null]],
        '/admin/tables' => [[['_route' => 'app_back_tables', '_controller' => 'App\\Controller\\BackController::tables'], null, null, null, false, false, null]],
        '/admin/wallet' => [[['_route' => 'app_back_wallet', '_controller' => 'App\\Controller\\BackController::wallet'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'app_back_profile', '_controller' => 'App\\Controller\\BackController::profile'], null, null, null, false, false, null]],
        '/admin/rtl' => [[['_route' => 'app_back_rtl', '_controller' => 'App\\Controller\\BackController::rtl'], null, null, null, false, false, null]],
        '/admin/sign-in' => [[['_route' => 'app_back_signin', '_controller' => 'App\\Controller\\BackController::signin'], null, null, null, false, false, null]],
        '/admin/sign-up' => [[['_route' => 'app_back_signup', '_controller' => 'App\\Controller\\BackController::signup'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_home', '_controller' => 'App\\Controller\\BackController::home'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'app_front_index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_front_about', '_controller' => 'App\\Controller\\FrontController::about'], null, null, null, false, false, null]],
        '/resume' => [[['_route' => 'app_front_resume', '_controller' => 'App\\Controller\\FrontController::resume'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_front_services', '_controller' => 'App\\Controller\\FrontController::services'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'app_front_portfolio', '_controller' => 'App\\Controller\\FrontController::portfolio'], null, null, null, false, false, null]],
        '/portfolio/details' => [[['_route' => 'app_front_portfolio_details', '_controller' => 'App\\Controller\\FrontController::portfolioDetails'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_front_contact', '_controller' => 'App\\Controller\\FrontController::contact'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/add' => [[['_route' => 'app_user_add', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/user/([^/]++)(?'
                    .'|(*:219)'
                    .'|/edit(*:232)'
                    .'|(*:240)'
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
        219 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
