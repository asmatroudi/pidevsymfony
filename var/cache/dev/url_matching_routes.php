<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/activities' => [[['_route' => 'admin_activities_index', '_controller' => 'App\\Controller\\ActivitiesAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/activities/new' => [[['_route' => 'admin_activities_new', '_controller' => 'App\\Controller\\ActivitiesAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activities' => [[['_route' => 'activities', '_controller' => 'App\\Controller\\ActivitiesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, true, false, null]],
        '/admin/login' => [[['_route' => 'login_admin', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null]],
        '/admin/register' => [[['_route' => 'register_admin', '_controller' => 'App\\Controller\\AdminController::regsiter'], null, null, null, false, false, null]],
        '/admin/commande' => [[['_route' => 'admin_commande_index', '_controller' => 'App\\Controller\\CommandeAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/panier/addcommande' => [[['_route' => 'add_commande', '_controller' => 'App\\Controller\\CommandeController::addCommande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/panier/confirmcommande' => [[['_route' => 'confirm_commande', '_controller' => 'App\\Controller\\CommandeController::confirmCommande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commentaire' => [[['_route' => 'admin_commentaire_index', '_controller' => 'App\\Controller\\CommentaireAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/commentaire/new' => [[['_route' => 'admin_commentaire_new', '_controller' => 'App\\Controller\\CommentaireAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/evenement/sortByAscDate' => [[['_route' => 'sort_by_asc_date', '_controller' => 'App\\Controller\\EvenementAdminController::sortAscDate'], null, null, null, false, false, null]],
        '/admin/evenement/sortByDescDate' => [[['_route' => 'sort_by_desc_date', '_controller' => 'App\\Controller\\EvenementAdminController::sortDescDate'], null, null, null, false, false, null]],
        '/admin/evenement/search' => [[['_route' => 'evenement_search', '_controller' => 'App\\Controller\\EvenementAdminController::search'], null, null, null, false, false, null]],
        '/admin/evenement' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\EvenementAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evenement/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\EvenementAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'events', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/gouvernorat/search' => [[['_route' => 'gouvernorat_search', '_controller' => 'App\\Controller\\GouvernoratAdminController::search'], null, null, null, false, false, null]],
        '/admin/gouvernorat' => [[['_route' => 'admin_gouvernorat_index', '_controller' => 'App\\Controller\\GouvernoratAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/gouvernorat/new' => [[['_route' => 'admin_gouvernorat_new', '_controller' => 'App\\Controller\\GouvernoratAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gouvernorat' => [[['_route' => 'gouvernorats', '_controller' => 'App\\Controller\\GouvernoratController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/aboutus' => [[['_route' => 'aboutus', '_controller' => 'App\\Controller\\HomeController::aboutus'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/admin/hotel/search' => [[['_route' => 'hotel_search', '_controller' => 'App\\Controller\\HotelAdminController::search'], null, null, null, false, false, null]],
        '/admin/hotel' => [[['_route' => 'admin_hotel_index', '_controller' => 'App\\Controller\\HotelAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/hotel/new' => [[['_route' => 'admin_hotel_new', '_controller' => 'App\\Controller\\HotelAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotel' => [[['_route' => 'hotels', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/activity' => [[['_route' => 'app_participation_activity_index', '_controller' => 'App\\Controller\\ParticipationActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/activity/new' => [[['_route' => 'app_participation_activity_new', '_controller' => 'App\\Controller\\ParticipationActivityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation/event' => [[['_route' => 'app_participation_event_index', '_controller' => 'App\\Controller\\ParticipationEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/event/new' => [[['_route' => 'app_participation_event_new', '_controller' => 'App\\Controller\\ParticipationEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/plat/search' => [[['_route' => 'plat_search', '_controller' => 'App\\Controller\\PlatAdminController::search'], null, null, null, false, false, null]],
        '/admin/plat' => [[['_route' => 'admin_plat_index', '_controller' => 'App\\Controller\\PlatAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/plat/new' => [[['_route' => 'admin_plat_new', '_controller' => 'App\\Controller\\PlatAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plat' => [[['_route' => 'plats', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produit' => [[['_route' => 'admin_produit_index', '_controller' => 'App\\Controller\\ProduitAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produit/new' => [[['_route' => 'admin_produit_new', '_controller' => 'App\\Controller\\ProduitAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/shop/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/shop/panier/displaypanier' => [[['_route' => 'displaypanier', '_controller' => 'App\\Controller\\ProduitController::displayPanier'], null, null, null, false, false, null]],
        '/rate/hotel' => [
            [['_route' => 'admin_rate_hotel_index', '_controller' => 'App\\Controller\\RateHotelAdminController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_rate_hotel_index', '_controller' => 'App\\Controller\\RateHotelController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|activities/(?'
                            .'|([^/]++)(?'
                                .'|(*:45)'
                                .'|/edit(*:57)'
                                .'|(*:64)'
                            .')'
                            .'|api/([^/]++)/edit(*:89)'
                        .')'
                        .'|comm(?'
                            .'|ande/(?'
                                .'|([^/]++)(*:120)'
                                .'|print(?'
                                    .'|commande/([^/]++)(*:153)'
                                    .'|allcommandes/([^/]++)(*:182)'
                                .')'
                            .')'
                            .'|entaire/([^/]++)(?'
                                .'|(*:211)'
                                .'|/edit(*:224)'
                                .'|(*:232)'
                            .')'
                        .')'
                        .'|evenement/([^/]++)(?'
                            .'|(*:263)'
                            .'|/edit(*:276)'
                            .'|(*:284)'
                        .')'
                        .'|gouvernorat/([^/]++)(?'
                            .'|(*:316)'
                            .'|/edit(*:329)'
                            .'|(*:337)'
                        .')'
                        .'|hotel/([^/]++)(?'
                            .'|(*:363)'
                            .'|/edit(*:376)'
                            .'|(*:384)'
                        .')'
                        .'|p(?'
                            .'|lat/([^/]++)(?'
                                .'|(*:412)'
                                .'|/edit(*:425)'
                                .'|(*:433)'
                            .')'
                            .'|roduit/([^/]++)(?'
                                .'|(*:460)'
                                .'|/edit(*:473)'
                                .'|(*:481)'
                            .')'
                        .')'
                    .')'
                    .'|ctivities/([^/]++)(?'
                        .'|(*:513)'
                        .'|/participer(*:532)'
                    .')'
                .')'
                .'|/comm(?'
                    .'|ande/(?'
                        .'|([^/]++)(?'
                            .'|(*:569)'
                            .'|/edit(*:582)'
                            .'|(*:590)'
                        .')'
                        .'|print(?'
                            .'|commande/([^/]++)(*:624)'
                            .'|allcommandes/([^/]++)(*:653)'
                        .')'
                    .')'
                    .'|entaire/([^/]++)(?'
                        .'|(*:682)'
                        .'|/edit(*:695)'
                        .'|(*:703)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:735)'
                    .'|/participer(*:754)'
                .')'
                .'|/gouvernorat/([^/]++)(*:784)'
                .'|/hotel/([^/]++)(?'
                    .'|(*:810)'
                    .'|/(?'
                        .'|comment/(?'
                            .'|add(*:836)'
                            .'|edit(*:848)'
                        .')'
                        .'|r(?'
                            .'|ate/add(*:868)'
                            .'|eserver(*:883)'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|articipation/(?'
                        .'|activity/([^/]++)(?'
                            .'|(*:935)'
                            .'|/edit(*:948)'
                            .'|(*:956)'
                        .')'
                        .'|event/([^/]++)(?'
                            .'|(*:982)'
                            .'|/edit(*:995)'
                            .'|(*:1003)'
                        .')'
                    .')'
                    .'|lat/([^/]++)(*:1026)'
                .')'
                .'|/shop/(?'
                    .'|([^/]++)(?'
                        .'|(*:1056)'
                        .'|/edit(*:1070)'
                        .'|(*:1079)'
                    .')'
                    .'|panier/addpanier/(\\d+)(*:1111)'
                    .'|supprimer/(\\d+)(*:1135)'
                .')'
                .'|/r(?'
                    .'|ate/hotel/(?'
                        .'|([^/]++)(*:1171)'
                        .'|new(*:1183)'
                        .'|([^/]++)(?'
                            .'|(*:1203)'
                            .'|/edit(*:1217)'
                            .'|(*:1226)'
                        .')'
                    .')'
                    .'|eservation/([^/]++)(?'
                        .'|(*:1259)'
                        .'|/edit(*:1273)'
                        .'|(*:1282)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1321)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'admin_activities_show', '_controller' => 'App\\Controller\\ActivitiesAdminController::show'], ['idActivity'], ['GET' => 0], null, false, true, null]],
        57 => [[['_route' => 'admin_activities_edit', '_controller' => 'App\\Controller\\ActivitiesAdminController::edit'], ['idActivity'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        64 => [[['_route' => 'admin_activities_delete', '_controller' => 'App\\Controller\\ActivitiesAdminController::delete'], ['idActivity'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => 'api_activity_edit', '_controller' => 'App\\Controller\\ActivitiesAdminController::majActivities'], ['id'], ['PUT' => 0], null, false, false, null]],
        120 => [[['_route' => 'admin_commande_show', '_controller' => 'App\\Controller\\CommandeAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        153 => [[['_route' => 'admin_print_commande', '_controller' => 'App\\Controller\\CommandeAdminController::exportCommandePDF'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'admin_print_commandes', '_controller' => 'App\\Controller\\CommandeAdminController::exportAllCommandesPDF'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'admin_commentaire_show', '_controller' => 'App\\Controller\\CommentaireAdminController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'admin_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireAdminController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'admin_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireAdminController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\EvenementAdminController::show'], ['idev'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\EvenementAdminController::edit'], ['idev'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\EvenementAdminController::delete'], ['idev'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'admin_gouvernorat_show', '_controller' => 'App\\Controller\\GouvernoratAdminController::show'], ['idGouver'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'admin_gouvernorat_edit', '_controller' => 'App\\Controller\\GouvernoratAdminController::edit'], ['idGouver'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'admin_gouvernorat_delete', '_controller' => 'App\\Controller\\GouvernoratAdminController::delete'], ['idGouver'], ['POST' => 0], null, false, true, null]],
        363 => [[['_route' => 'admin_hotel_show', '_controller' => 'App\\Controller\\HotelAdminController::show'], ['idh'], ['GET' => 0], null, false, true, null]],
        376 => [[['_route' => 'admin_hotel_edit', '_controller' => 'App\\Controller\\HotelAdminController::edit'], ['idh'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'admin_hotel_delete', '_controller' => 'App\\Controller\\HotelAdminController::delete'], ['idh'], ['POST' => 0], null, false, true, null]],
        412 => [[['_route' => 'admin_plat_show', '_controller' => 'App\\Controller\\PlatAdminController::show'], ['idplat'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => 'admin_plat_edit', '_controller' => 'App\\Controller\\PlatAdminController::edit'], ['idplat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        433 => [[['_route' => 'admin_plat_delete', '_controller' => 'App\\Controller\\PlatAdminController::delete'], ['idplat'], ['POST' => 0], null, false, true, null]],
        460 => [[['_route' => 'admin_produit_show', '_controller' => 'App\\Controller\\ProduitAdminController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'admin_produit_edit', '_controller' => 'App\\Controller\\ProduitAdminController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'admin_produit_delete', '_controller' => 'App\\Controller\\ProduitAdminController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'app_activities_show', '_controller' => 'App\\Controller\\ActivitiesController::show'], ['idActivity'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => 'app_participation_activity_participer', '_controller' => 'App\\Controller\\ActivitiesController::participerActivity'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        569 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        624 => [[['_route' => 'app_print_commande', '_controller' => 'App\\Controller\\CommandeController::exportCommandePDF'], ['id'], null, null, false, true, null]],
        653 => [[['_route' => 'app_print_commandes', '_controller' => 'App\\Controller\\CommandeController::exportAllCommandesPDF'], ['id'], null, null, false, true, null]],
        682 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        735 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idev'], ['GET' => 0], null, false, true, null]],
        754 => [[['_route' => 'app_participation_event_participer', '_controller' => 'App\\Controller\\EvenementController::participerEvent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        784 => [[['_route' => 'app_gouvernorat_show', '_controller' => 'App\\Controller\\GouvernoratController::show'], ['idGouver'], ['GET' => 0], null, false, true, null]],
        810 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['idh'], ['GET' => 0], null, false, true, null]],
        836 => [[['_route' => 'app_hotel_comment', '_controller' => 'App\\Controller\\HotelController::addComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        848 => [[['_route' => 'app_hotel_comment_edit', '_controller' => 'App\\Controller\\HotelController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        868 => [[['_route' => 'app_hotel_rate', '_controller' => 'App\\Controller\\HotelController::addRate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        883 => [[['_route' => 'app_reservation_hotel', '_controller' => 'App\\Controller\\HotelController::reserverHotel'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        935 => [[['_route' => 'app_participation_activity_show', '_controller' => 'App\\Controller\\ParticipationActivityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        948 => [[['_route' => 'app_participation_activity_edit', '_controller' => 'App\\Controller\\ParticipationActivityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        956 => [[['_route' => 'app_participation_activity_delete', '_controller' => 'App\\Controller\\ParticipationActivityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        982 => [[['_route' => 'app_participation_event_show', '_controller' => 'App\\Controller\\ParticipationEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        995 => [[['_route' => 'app_participation_event_edit', '_controller' => 'App\\Controller\\ParticipationEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1003 => [[['_route' => 'app_participation_event_delete', '_controller' => 'App\\Controller\\ParticipationEventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1026 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['idplat'], ['GET' => 0], null, false, true, null]],
        1056 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1079 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        1111 => [[['_route' => 'add_panier', '_controller' => 'App\\Controller\\ProduitController::addPanier'], ['id'], null, null, false, true, null]],
        1135 => [[['_route' => 'remove_panier', '_controller' => 'App\\Controller\\ProduitController::remove'], ['id'], null, null, false, true, null]],
        1171 => [[['_route' => 'admin_rate_hotel_show', '_controller' => 'App\\Controller\\RateHotelAdminController::show'], ['idRate'], ['GET' => 0], null, false, true, null]],
        1183 => [[['_route' => 'app_rate_hotel_new', '_controller' => 'App\\Controller\\RateHotelController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1203 => [[['_route' => 'app_rate_hotel_show', '_controller' => 'App\\Controller\\RateHotelController::show'], ['idRate'], ['GET' => 0], null, false, true, null]],
        1217 => [[['_route' => 'app_rate_hotel_edit', '_controller' => 'App\\Controller\\RateHotelController::edit'], ['idRate'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1226 => [[['_route' => 'app_rate_hotel_delete', '_controller' => 'App\\Controller\\RateHotelController::delete'], ['idRate'], ['POST' => 0], null, false, true, null]],
        1259 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1273 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1282 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1321 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
