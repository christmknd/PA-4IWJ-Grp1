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
        '/annonces' => [[['_route' => 'mes_annonces_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/show' => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\BackEnd\\AdminController::show'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new' => [[['_route' => 'adminregister_admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::registerAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'admin_annonces', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/mes_evenements' => [[['_route' => 'admin_evenements', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\BackEnd\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_users_new', '_controller' => 'App\\Controller\\BackEnd\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenements' => [[['_route' => 'mes_evenements_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenements/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favori' => [[['_route' => 'favori', '_controller' => 'App\\Controller\\FavoriController::indexFavori'], null, null, null, true, false, null]],
        '/favori/favori-annonce' => [[['_route' => 'favori_annonce', '_controller' => 'App\\Controller\\FavoriController::indexFavoriAnnonce'], null, null, null, false, false, null]],
        '/favori/favori-evenement' => [[['_route' => 'favori_evenement', '_controller' => 'App\\Controller\\FavoriController::indexFavoriEvenement'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0], null, false, false, null]],
        '/register/person' => [[['_route' => 'register_person', '_controller' => 'App\\Controller\\RegistrationController::registerPerson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/association' => [[['_route' => 'register_association', '_controller' => 'App\\Controller\\RegistrationController::registerAssociation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], null, ['POST' => 0], null, false, false, null],
        ],
        '/user/edit' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:193)'
                        .'|/(?'
                            .'|edit(*:209)'
                            .'|toggle_etat(*:228)'
                        .')'
                        .'|(*:237)'
                    .')'
                    .'|dmin/(?'
                        .'|annonces/([^/]++)(?'
                            .'|(*:274)'
                            .'|/(?'
                                .'|edit(*:290)'
                                .'|toggle_etat(*:309)'
                            .')'
                            .'|(*:318)'
                        .')'
                        .'|mes_evenements/([^/]++)(?'
                            .'|(*:353)'
                            .'|/(?'
                                .'|edit(*:369)'
                                .'|remove_annonce/([^/]++)(*:400)'
                                .'|add_annonce/([^/]++)(*:428)'
                                .'|toggle_etat(*:447)'
                            .')'
                            .'|(*:456)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:481)'
                            .'|/edit(*:494)'
                            .'|(*:502)'
                        .')'
                    .')'
                .')'
                .'|/evenements/(?'
                    .'|show([^/]++)(*:540)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:567)'
                            .'|remove_annonce/([^/]++)(*:598)'
                            .'|add_annonce/([^/]++)(*:626)'
                            .'|toggle_etat(*:645)'
                        .')'
                        .'|(*:654)'
                    .')'
                .')'
                .'|/favori/([^/]++)/(?'
                    .'|annonce\\-toggle(*:699)'
                    .'|evenement\\-toggle(*:724)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:769)'
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
        193 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'annonce_toggle_etat', '_controller' => 'App\\Controller\\AnnonceController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        237 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'admin_annonces_show', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'admin_annonces_edit', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'admin_annonces_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        318 => [[['_route' => 'admin_annonces_delete', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        353 => [[['_route' => 'admin_evenements_show', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'admin_evenements_edit', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'admin_evenements_remove_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'admin_evenements_add_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        447 => [[['_route' => 'admin_evenements_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        456 => [[['_route' => 'admin_evenements_delete', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        481 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\BackEnd\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        494 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\BackEnd\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        502 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\BackEnd\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        540 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        567 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        598 => [[['_route' => 'remove_annonce_from_evenement', '_controller' => 'App\\Controller\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        626 => [[['_route' => 'add_annonce_to_evenement', '_controller' => 'App\\Controller\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        645 => [[['_route' => 'evenement_toggle_etat', '_controller' => 'App\\Controller\\EvenementController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        654 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        699 => [[['_route' => 'favori_annonce_toggle', '_controller' => 'App\\Controller\\FavoriController::annonce_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        724 => [[['_route' => 'favori_evenement_toggle', '_controller' => 'App\\Controller\\FavoriController::evenement_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        769 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
