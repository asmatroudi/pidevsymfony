<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/Article/Culturelle/Ajout' => [[['_route' => 'AC_Back_Ajout', '_controller' => 'App\\Controller\\ACControllerBackController::ajouter'], null, null, null, false, false, null]],
        '/admin/Article/Culturelle/List' => [[['_route' => 'AC_Back_List', '_controller' => 'App\\Controller\\ACControllerBackController::List'], null, null, null, false, false, null]],
        '/admin/activities' => [[['_route' => 'admin_activities_index', '_controller' => 'App\\Controller\\ActivitiesAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/activities/new' => [[['_route' => 'admin_activities_new', '_controller' => 'App\\Controller\\ActivitiesAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activities' => [[['_route' => 'activities', '_controller' => 'App\\Controller\\ActivitiesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, true, false, null]],
        '/admin/login' => [
            [['_route' => 'login_admin', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null],
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/admin/register' => [
            [['_route' => 'register_admin', '_controller' => 'App\\Controller\\AdminController::regsiter'], null, null, null, false, false, null],
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/Article/Culturelle/Ajout' => [[['_route' => 'AC_Ajout', '_controller' => 'App\\Controller\\ArticleCulturelleController::ajouter'], null, null, null, false, false, null]],
        '/Article/Culturelle/List' => [[['_route' => 'AC_List', '_controller' => 'App\\Controller\\ArticleCulturelleController::List'], null, null, null, false, false, null]],
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
        '/admin/Reclamation/List' => [[['_route' => 'List_Back_Rec', '_controller' => 'App\\Controller\\ReclamationBackController::List'], null, null, null, false, false, null]],
        '/admin/Reclamation/ListBad' => [[['_route' => 'ListBad_Back_Rec', '_controller' => 'App\\Controller\\ReclamationBackController::badWords'], null, null, null, false, false, null]],
        '/Reclamation/Ajout' => [[['_route' => 'Ajout_Rec', '_controller' => 'App\\Controller\\ReclamationController::ajouter'], null, null, null, false, false, null]],
        '/Reclamation/List' => [[['_route' => 'List_Rec', '_controller' => 'App\\Controller\\ReclamationController::List'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register_front', '_controller' => 'App\\Controller\\RegistrationController::registerFront'], null, null, null, false, false, null]],
        '/admin/registeration' => [[['_route' => 'admin_registration', '_controller' => 'App\\Controller\\RegistrationController::adminRegistration'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login_front', '_controller' => 'App\\Controller\\SecurityHomeController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityHomeController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|Article/Culturelle/(?'
                            .'|Modifier/([^/]++)(*:59)'
                            .'|Supprimer/([^/]++)(*:84)'
                        .')'
                        .'|activities/(?'
                            .'|([^/]++)(?'
                                .'|(*:117)'
                                .'|/edit(*:130)'
                                .'|(*:138)'
                            .')'
                            .'|api/([^/]++)/edit(*:164)'
                        .')'
                        .'|comm(?'
                            .'|ande/(?'
                                .'|([^/]++)(*:196)'
                                .'|print(?'
                                    .'|commande/([^/]++)(*:229)'
                                    .'|allcommandes/([^/]++)(*:258)'
                                .')'
                            .')'
                            .'|entaire/([^/]++)(?'
                                .'|(*:287)'
                                .'|/edit(*:300)'
                                .'|(*:308)'
                            .')'
                        .')'
                        .'|evenement/([^/]++)(?'
                            .'|(*:339)'
                            .'|/edit(*:352)'
                            .'|(*:360)'
                        .')'
                        .'|gouvernorat/([^/]++)(?'
                            .'|(*:392)'
                            .'|/edit(*:405)'
                            .'|(*:413)'
                        .')'
                        .'|hotel/([^/]++)(?'
                            .'|(*:439)'
                            .'|/edit(*:452)'
                            .'|(*:460)'
                        .')'
                        .'|p(?'
                            .'|lat/([^/]++)(?'
                                .'|(*:488)'
                                .'|/edit(*:501)'
                                .'|(*:509)'
                            .')'
                            .'|roduit/([^/]++)(?'
                                .'|(*:536)'
                                .'|/edit(*:549)'
                                .'|(*:557)'
                            .')'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|editprofile(*:598)'
                                .'|deleteprofile(?'
                                    .'|(*:622)'
                                .')'
                                .'|block(*:636)'
                            .')'
                            .'|(*:645)'
                        .')'
                    .')'
                    .'|ctivities/([^/]++)(?'
                        .'|(*:676)'
                        .'|/participer(*:695)'
                    .')'
                .')'
                .'|/Article/Culturelle/(?'
                    .'|Modifier/([^/]++)(*:745)'
                    .'|Supprimer/([^/]++)(*:771)'
                    .'|consulter/([^/]++)(*:797)'
                    .'|PDF/([^/]++)(*:817)'
                .')'
                .'|/comm(?'
                    .'|ande/(?'
                        .'|([^/]++)(?'
                            .'|(*:853)'
                            .'|/edit(*:866)'
                            .'|(*:874)'
                        .')'
                        .'|print(?'
                            .'|commande/([^/]++)(*:908)'
                            .'|allcommandes/([^/]++)(*:937)'
                        .')'
                    .')'
                    .'|entaire/([^/]++)(?'
                        .'|(*:966)'
                        .'|/edit(*:979)'
                        .'|(*:987)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:1019)'
                    .'|/participer(*:1039)'
                .')'
                .'|/gouvernorat/([^/]++)(*:1070)'
                .'|/hotel/([^/]++)(?'
                    .'|(*:1097)'
                    .'|/(?'
                        .'|comment/(?'
                            .'|add(*:1124)'
                            .'|edit(*:1137)'
                        .')'
                        .'|r(?'
                            .'|ate/add(*:1158)'
                            .'|eserver(*:1174)'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|articipation/(?'
                        .'|activity/([^/]++)(?'
                            .'|(*:1227)'
                            .'|/edit(*:1241)'
                            .'|(*:1250)'
                        .')'
                        .'|event/([^/]++)(?'
                            .'|(*:1277)'
                            .'|/edit(*:1291)'
                            .'|(*:1300)'
                        .')'
                    .')'
                    .'|lat/([^/]++)(*:1323)'
                .')'
                .'|/shop/(?'
                    .'|([^/]++)(?'
                        .'|(*:1353)'
                        .'|/edit(*:1367)'
                        .'|(*:1376)'
                    .')'
                    .'|panier/addpanier/(\\d+)(*:1408)'
                    .'|supprimer/(\\d+)(*:1432)'
                .')'
                .'|/r(?'
                    .'|ate/hotel/(?'
                        .'|([^/]++)(*:1468)'
                        .'|new(*:1480)'
                        .'|([^/]++)(?'
                            .'|(*:1500)'
                            .'|/edit(*:1514)'
                            .'|(*:1523)'
                        .')'
                    .')'
                    .'|eservation/([^/]++)(?'
                        .'|(*:1556)'
                        .'|/edit(*:1570)'
                        .'|(*:1579)'
                    .')'
                .')'
                .'|/Reclamation/(?'
                    .'|modifier/([^/]++)(*:1623)'
                    .'|Supprimer/([^/]++)(*:1650)'
                .')'
                .'|/user/([^/]++)/edit(?'
                    .'|(*:1682)'
                    .'|profile(*:1698)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1739)'
                    .'|wdt/([^/]++)(*:1760)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1807)'
                            .'|router(*:1822)'
                            .'|exception(?'
                                .'|(*:1843)'
                                .'|\\.css(*:1857)'
                            .')'
                        .')'
                        .'|(*:1868)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        59 => [[['_route' => 'AC_Back_Modif', '_controller' => 'App\\Controller\\ACControllerBackController::Modifier'], ['id'], null, null, false, true, null]],
        84 => [[['_route' => 'AC_Back_Supprimer', '_controller' => 'App\\Controller\\ACControllerBackController::supprimer'], ['id'], null, null, false, true, null]],
        117 => [[['_route' => 'admin_activities_show', '_controller' => 'App\\Controller\\ActivitiesAdminController::show'], ['idActivity'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'admin_activities_edit', '_controller' => 'App\\Controller\\ActivitiesAdminController::edit'], ['idActivity'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'admin_activities_delete', '_controller' => 'App\\Controller\\ActivitiesAdminController::delete'], ['idActivity'], ['POST' => 0], null, false, true, null]],
        164 => [[['_route' => 'api_activity_edit', '_controller' => 'App\\Controller\\ActivitiesAdminController::majActivities'], ['id'], ['PUT' => 0], null, false, false, null]],
        196 => [[['_route' => 'admin_commande_show', '_controller' => 'App\\Controller\\CommandeAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'admin_print_commande', '_controller' => 'App\\Controller\\CommandeAdminController::exportCommandePDF'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'admin_print_commandes', '_controller' => 'App\\Controller\\CommandeAdminController::exportAllCommandesPDF'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'admin_commentaire_show', '_controller' => 'App\\Controller\\CommentaireAdminController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'admin_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireAdminController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'admin_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireAdminController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        339 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\EvenementAdminController::show'], ['idev'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\EvenementAdminController::edit'], ['idev'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\EvenementAdminController::delete'], ['idev'], ['POST' => 0], null, false, true, null]],
        392 => [[['_route' => 'admin_gouvernorat_show', '_controller' => 'App\\Controller\\GouvernoratAdminController::show'], ['idGouver'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'admin_gouvernorat_edit', '_controller' => 'App\\Controller\\GouvernoratAdminController::edit'], ['idGouver'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'admin_gouvernorat_delete', '_controller' => 'App\\Controller\\GouvernoratAdminController::delete'], ['idGouver'], ['POST' => 0], null, false, true, null]],
        439 => [[['_route' => 'admin_hotel_show', '_controller' => 'App\\Controller\\HotelAdminController::show'], ['idh'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'admin_hotel_edit', '_controller' => 'App\\Controller\\HotelAdminController::edit'], ['idh'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'admin_hotel_delete', '_controller' => 'App\\Controller\\HotelAdminController::delete'], ['idh'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'admin_plat_show', '_controller' => 'App\\Controller\\PlatAdminController::show'], ['idplat'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'admin_plat_edit', '_controller' => 'App\\Controller\\PlatAdminController::edit'], ['idplat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'admin_plat_delete', '_controller' => 'App\\Controller\\PlatAdminController::delete'], ['idplat'], ['POST' => 0], null, false, true, null]],
        536 => [[['_route' => 'admin_produit_show', '_controller' => 'App\\Controller\\ProduitAdminController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        549 => [[['_route' => 'admin_produit_edit', '_controller' => 'App\\Controller\\ProduitAdminController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'admin_produit_delete', '_controller' => 'App\\Controller\\ProduitAdminController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        598 => [[['_route' => 'admin_user_edit_profile', '_controller' => 'App\\Controller\\UserAdminController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [
            [['_route' => 'admin_user_delete_profile', '_controller' => 'App\\Controller\\UserAdminController::deleteAccount'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_user_delete_profile', '_controller' => 'App\\Controller\\UserController::deleteAccount'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        636 => [[['_route' => 'app_user_block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        676 => [[['_route' => 'app_activities_show', '_controller' => 'App\\Controller\\ActivitiesController::show'], ['idActivity'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_participation_activity_participer', '_controller' => 'App\\Controller\\ActivitiesController::participerActivity'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        745 => [[['_route' => 'AC_Modif', '_controller' => 'App\\Controller\\ArticleCulturelleController::Modifier'], ['id'], null, null, false, true, null]],
        771 => [[['_route' => 'AC_Supprimer', '_controller' => 'App\\Controller\\ArticleCulturelleController::supprimer'], ['id'], null, null, false, true, null]],
        797 => [[['_route' => 'AC_Consulter', '_controller' => 'App\\Controller\\ArticleCulturelleController::consult'], ['id'], null, null, false, true, null]],
        817 => [[['_route' => 'PDF', '_controller' => 'App\\Controller\\ArticleCulturelleController::exportPdf'], ['id'], null, null, false, true, null]],
        853 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        866 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        874 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        908 => [[['_route' => 'app_print_commande', '_controller' => 'App\\Controller\\CommandeController::exportCommandePDF'], ['id'], null, null, false, true, null]],
        937 => [[['_route' => 'app_print_commandes', '_controller' => 'App\\Controller\\CommandeController::exportAllCommandesPDF'], ['id'], null, null, false, true, null]],
        966 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        979 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        987 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        1019 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idev'], ['GET' => 0], null, false, true, null]],
        1039 => [[['_route' => 'app_participation_event_participer', '_controller' => 'App\\Controller\\EvenementController::participerEvent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1070 => [[['_route' => 'app_gouvernorat_show', '_controller' => 'App\\Controller\\GouvernoratController::show'], ['idGouver'], ['GET' => 0], null, false, true, null]],
        1097 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['idh'], ['GET' => 0], null, false, true, null]],
        1124 => [[['_route' => 'app_hotel_comment', '_controller' => 'App\\Controller\\HotelController::addComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1137 => [[['_route' => 'app_hotel_comment_edit', '_controller' => 'App\\Controller\\HotelController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1158 => [[['_route' => 'app_hotel_rate', '_controller' => 'App\\Controller\\HotelController::addRate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1174 => [[['_route' => 'app_reservation_hotel', '_controller' => 'App\\Controller\\HotelController::reserverHotel'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1227 => [[['_route' => 'app_participation_activity_show', '_controller' => 'App\\Controller\\ParticipationActivityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1241 => [[['_route' => 'app_participation_activity_edit', '_controller' => 'App\\Controller\\ParticipationActivityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1250 => [[['_route' => 'app_participation_activity_delete', '_controller' => 'App\\Controller\\ParticipationActivityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1277 => [[['_route' => 'app_participation_event_show', '_controller' => 'App\\Controller\\ParticipationEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1291 => [[['_route' => 'app_participation_event_edit', '_controller' => 'App\\Controller\\ParticipationEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1300 => [[['_route' => 'app_participation_event_delete', '_controller' => 'App\\Controller\\ParticipationEventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1323 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['idplat'], ['GET' => 0], null, false, true, null]],
        1353 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        1367 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1376 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        1408 => [[['_route' => 'add_panier', '_controller' => 'App\\Controller\\ProduitController::addPanier'], ['id'], null, null, false, true, null]],
        1432 => [[['_route' => 'remove_panier', '_controller' => 'App\\Controller\\ProduitController::remove'], ['id'], null, null, false, true, null]],
        1468 => [[['_route' => 'admin_rate_hotel_show', '_controller' => 'App\\Controller\\RateHotelAdminController::show'], ['idRate'], ['GET' => 0], null, false, true, null]],
        1480 => [[['_route' => 'app_rate_hotel_new', '_controller' => 'App\\Controller\\RateHotelController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1500 => [[['_route' => 'app_rate_hotel_show', '_controller' => 'App\\Controller\\RateHotelController::show'], ['idRate'], ['GET' => 0], null, false, true, null]],
        1514 => [[['_route' => 'app_rate_hotel_edit', '_controller' => 'App\\Controller\\RateHotelController::edit'], ['idRate'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1523 => [[['_route' => 'app_rate_hotel_delete', '_controller' => 'App\\Controller\\RateHotelController::delete'], ['idRate'], ['POST' => 0], null, false, true, null]],
        1556 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1570 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1579 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1623 => [[['_route' => 'Modifier_Rec', '_controller' => 'App\\Controller\\ReclamationController::modifier'], ['id'], null, null, false, true, null]],
        1650 => [[['_route' => 'Supprimer_Rec', '_controller' => 'App\\Controller\\ReclamationController::supprimer'], ['id'], null, null, false, true, null]],
        1682 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1698 => [[['_route' => 'app_user_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1739 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1760 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1807 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1822 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1843 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1857 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1868 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
