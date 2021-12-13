<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/annonces' => [[['_route' => 'mes_annonces_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/show' => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\BackEnd\\AdminController::show'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new' => [[['_route' => 'adminregister_admin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::registerAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'admin_annonces', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenements', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\BackEnd\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_users_new', '_controller' => 'App\\Controller\\BackEnd\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenements' => [[['_route' => 'mes_evenements_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenements/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favori' => [[['_route' => 'favori', '_controller' => 'App\\Controller\\FavoriController::indexFavori'], null, null, null, true, false, null]],
        '/mention/legale' => [[['_route' => 'mention_legale', '_controller' => 'App\\Controller\\MentionLegaleController::index'], null, null, null, false, false, null]],
        '/plateforme' => [[['_route' => 'plateforme', '_controller' => 'App\\Controller\\PlateformeController::index'], null, null, null, false, false, null]],
        '/user/register/event' => [[['_route' => 'evenements_registred', '_controller' => 'App\\Controller\\RegisterEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0], null, true, false, null]],
        '/register/person' => [[['_route' => 'register_person', '_controller' => 'App\\Controller\\RegistrationController::registerPerson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/association' => [[['_route' => 'register_association', '_controller' => 'App\\Controller\\RegistrationController::registerAssociation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], null, ['POST' => 0], null, false, false, null],
        ],
        '/user/edit' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/user-post-mail' => [[['_route' => 'user_post_mail', '_controller' => 'App\\Controller\\UserController::envoiMailConfirmation'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:31)'
                        .'|/(?'
                            .'|edit(*:46)'
                            .'|toggle_is_(?'
                                .'|finish(*:72)'
                                .'|published(*:88)'
                            .')'
                        .')'
                        .'|(*:97)'
                    .')'
                    .'|dmin/(?'
                        .'|annonces/([^/]++)(?'
                            .'|(*:133)'
                            .'|/(?'
                                .'|edit(*:149)'
                                .'|toggle_etat(*:168)'
                            .')'
                            .'|(*:177)'
                        .')'
                        .'|evenements/([^/]++)(?'
                            .'|(*:208)'
                            .'|/(?'
                                .'|edit(*:224)'
                                .'|remove_annonce/([^/]++)(*:255)'
                                .'|add_annonce/([^/]++)(*:283)'
                                .'|toggle_etat(*:302)'
                            .')'
                            .'|(*:311)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:336)'
                            .'|/edit(*:349)'
                            .'|(*:357)'
                        .')'
                    .')'
                .')'
                .'|/evenements/(?'
                    .'|show([^/]++)(*:395)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:422)'
                            .'|remove_annonce/([^/]++)(*:453)'
                            .'|add_annonce/([^/]++)(*:481)'
                            .'|toggle_is_(?'
                                .'|finish(*:508)'
                                .'|published(*:525)'
                            .')'
                        .')'
                        .'|(*:535)'
                    .')'
                .')'
                .'|/favori/([^/]++)/(?'
                    .'|annonce\\-toggle(*:580)'
                    .'|evenement\\-toggle(*:605)'
                .')'
                .'|/user/register/event/([^/]++)/(?'
                    .'|remove_user(*:658)'
                    .'|add_user(*:674)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:719)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'annonce_toggle_is_finish', '_controller' => 'App\\Controller\\AnnonceController::toggle_isFinish'], ['id'], ['POST' => 0], null, false, false, null]],
        88 => [[['_route' => 'annonce_toggle_is_published', '_controller' => 'App\\Controller\\AnnonceController::toggle_isPublished'], ['id'], ['POST' => 0], null, false, false, null]],
        97 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        133 => [[['_route' => 'admin_annonces_show', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        149 => [[['_route' => 'admin_annonces_edit', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        168 => [[['_route' => 'admin_annonces_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        177 => [[['_route' => 'admin_annonces_delete', '_controller' => 'App\\Controller\\BackEnd\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        208 => [[['_route' => 'admin_evenements_show', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'admin_evenements_edit', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'admin_evenements_remove_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        283 => [[['_route' => 'admin_evenements_add_annonce', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'admin_evenements_toggle_etat', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::toggle_etat'], ['id'], ['POST' => 0], null, false, false, null]],
        311 => [[['_route' => 'admin_evenements_delete', '_controller' => 'App\\Controller\\BackEnd\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\BackEnd\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\BackEnd\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\BackEnd\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        422 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'remove_annonce_from_evenement', '_controller' => 'App\\Controller\\EvenementController::remove_annonce_from_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        481 => [[['_route' => 'add_annonce_to_evenement', '_controller' => 'App\\Controller\\EvenementController::add_annonce_to_evenement'], ['id', 'annonce_id'], ['POST' => 0], null, false, true, null]],
        508 => [[['_route' => 'evenement_toggle_is_finish', '_controller' => 'App\\Controller\\EvenementController::toggle_isFinish'], ['id'], ['POST' => 0], null, false, false, null]],
        525 => [[['_route' => 'evenement_toggle_is_published', '_controller' => 'App\\Controller\\EvenementController::toggle_isPublished'], ['id'], ['POST' => 0], null, false, false, null]],
        535 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        580 => [[['_route' => 'favori_annonce_toggle', '_controller' => 'App\\Controller\\FavoriController::annonce_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        605 => [[['_route' => 'favori_evenement_toggle', '_controller' => 'App\\Controller\\FavoriController::evenement_toggle_favori'], ['id'], ['POST' => 0], null, false, false, null]],
        658 => [[['_route' => 'remove_user_from_evenement', '_controller' => 'App\\Controller\\RegisterEventController::remove_user_from_evenement'], ['id'], ['POST' => 0], null, false, false, null]],
        674 => [[['_route' => 'add_user_to_evenement', '_controller' => 'App\\Controller\\RegisterEventController::add_user_to_evenement'], ['id'], ['POST' => 0], null, false, false, null]],
        719 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
