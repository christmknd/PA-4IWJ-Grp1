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
        '/mes_annonces' => [[['_route' => 'mes_annonces_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mes_annonces/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/show' => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\BackEnd\\AdminController::show'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new' => [[['_route' => 'adminregister_admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::registerAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'admin_annonces', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/mes_evenements' => [[['_route' => 'admin_evenements', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\BackEnd\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_users_new', '_controller' => 'App\\Controller\\BackEnd\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mes_evenements' => [[['_route' => 'mes_evenements_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mes_evenements/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/mes_(?'
                    .'|annonces/([^/]++)(?'
                        .'|(*:197)'
                        .'|/(?'
                            .'|edit(*:213)'
                            .'|toggle_etat(*:232)'
                        .')'
                        .'|(*:241)'
                    .')'
                    .'|evenements/(?'
                        .'|show([^/]++)(*:276)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:303)'
                                .'|remove_annonce/([^/]++)(*:334)'
                                .'|add_annonce/([^/]++)(*:362)'
                                .'|toggle_etat(*:381)'
                            .')'
                            .'|(*:390)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|annonces/([^/]++)(?'
                        .'|(*:431)'
                        .'|/(?'
                            .'|edit(*:447)'
                            .'|toggle_etat(*:466)'
                        .')'
                        .'|(*:475)'
                    .')'
                    .'|mes_evenements/([^/]++)(?'
                        .'|(*:510)'
                        .'|/(?'
                            .'|edit(*:526)'
                            .'|remove_annonce/([^/]++)(*:557)'
                            .'|add_annonce/([^/]++)(*:585)'
                            .'|toggle_etat(*:604)'
                        .')'
                        .'|(*:613)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:638)'
                        .'|/edit(*:651)'
                        .'|(*:659)'
                    .')'
                .')'
                .'|/favori/([^/]++)/(?'
                    .'|annonce\\-toggle(*:704)'
                    .'|evenement\\-toggle(*:729)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:774)'
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
        197 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'annonce_toggle_etat', '_controller' => 'App\\Controller\\AnnonceController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        241 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'remove_annonce_from_evenement', '_controller' => 'App\\Controller\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => 'add_annonce_to_evenement', '_controller' => 'App\\Controller\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'evenement_toggle_etat', '_controller' => 'App\\Controller\\EvenementController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        390 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        431 => [[['_route' => 'admin_annonces_show', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'admin_annonces_edit', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'admin_annonces_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        475 => [[['_route' => 'admin_annonces_delete', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        510 => [[['_route' => 'admin_evenements_show', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'admin_evenements_edit', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'admin_evenements_remove_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'admin_evenements_add_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        604 => [[['_route' => 'admin_evenements_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        613 => [[['_route' => 'admin_evenements_delete', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        638 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\BackEnd\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\BackEnd\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\BackEnd\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        704 => [[['_route' => 'favori_annonce_toggle', '_controller' => 'App\\Controller\\FavoriController::annonce_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        729 => [[['_route' => 'favori_evenement_toggle', '_controller' => 'App\\Controller\\FavoriController::evenement_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        774 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
