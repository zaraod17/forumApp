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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::mainPage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/add_(?'
                    .'|comment/([^/]++)/([^/]++)(*:202)'
                    .'|post/([^/]++)(*:223)'
                .')'
                .'|/remove(?'
                    .'|/comment/([^/]++)/([^/]++)/([^/]++)(*:277)'
                    .'|_post/([^/]++)/([^/]++)(*:308)'
                .')'
                .'|/post_list/([^/]++)(?:/([^/]++))?(*:350)'
                .'|/s(?'
                    .'|how_p(?'
                        .'|ost/([^/]++)/([^/]++)(?:/([^/]++))?(*:406)'
                        .'|rofile/([^/]++)(*:429)'
                    .')'
                    .'|earch_results(?:/([^/]++))?(*:465)'
                .')'
                .'|/change_password/([^/]++)(*:499)'
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
        202 => [[['_route' => 'add-comment', '_controller' => 'App\\Controller\\CommentController::addComment'], ['topicId', 'id'], null, null, false, true, null]],
        223 => [[['_route' => 'post', '_controller' => 'App\\Controller\\FrontController::post'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'remove-comment', '_controller' => 'App\\Controller\\CommentController::removeComment'], ['topicId', 'postId', 'id'], null, null, false, true, null]],
        308 => [[['_route' => 'remove-post', '_controller' => 'App\\Controller\\FrontController::removePost'], ['topicId', 'id'], null, null, false, true, null]],
        350 => [[['_route' => 'post-list', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::postList'], ['id', 'page'], null, null, false, true, null]],
        406 => [[['_route' => 'show-post', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::showPost'], ['topicId', 'id', 'page'], null, null, false, true, null]],
        429 => [[['_route' => 'show-profile', '_controller' => 'App\\Controller\\FrontController::showProfile'], ['userId'], null, null, false, true, null]],
        465 => [[['_route' => 'search-results', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], ['page'], ['GET' => 0], null, false, true, null]],
        499 => [
            [['_route' => 'change-password', '_controller' => 'App\\Controller\\SecurityController::changePassword'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
