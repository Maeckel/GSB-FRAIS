<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/Visiteur' => [[['_route' => 'app_visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/Visiteur/Connecter' => [[['_route' => 'app_visiteur_connecter', '_controller' => 'App\\Controller\\VisiteurController::Authentification'], null, null, null, false, false, null]],
        '/Visiteur/Consulter' => [[['_route' => 'app_consulter', '_controller' => 'App\\Controller\\VisiteurController::Consulter'], null, null, null, false, false, null]],
        '/Visiteur/Renseigner' => [[['_route' => 'app_renseigner', '_controller' => 'App\\Controller\\VisiteurController::Renseigner'], null, null, null, false, false, null]],
        '/Visiteur/Initialiser' => [[['_route' => 'app_initialiser', '_controller' => 'App\\Controller\\VisiteurController::Initialiser'], null, null, null, false, false, null]],
        '/Visiteur/Espace' => [[['_route' => 'app_espace_visiteur', '_controller' => 'App\\Controller\\VisiteurController::Espace'], null, null, null, false, false, null]],
        '/Visiteur/Renseigner/Ajouter' => [[['_route' => 'app_frais_hors_forfait', '_controller' => 'App\\Controller\\VisiteurController::Ajouter'], null, null, null, false, false, null]],
        '/visiteur/deconnecter' => [[['_route' => 'app_visiteur_deconnexion', '_controller' => 'App\\Controller\\VisiteurController::Deconnecter'], null, null, null, false, false, null]],
        '/Comptable' => [[['_route' => 'app_comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/Comptable/Connecter' => [[['_route' => 'app_comptable_connecter', '_controller' => 'App\\Controller\\ComptableController::Authentification'], null, null, null, false, false, null]],
        '/Comptable/Valider' => [[['_route' => 'app_valider', '_controller' => 'App\\Controller\\ComptableController::Valider'], null, null, null, false, false, null]],
        '/Comptable/Suivre' => [[['_route' => 'app_suivre', '_controller' => 'App\\Controller\\ComptableController::Suivre'], null, null, null, false, false, null]],
        '/Comptable/Espace' => [[['_route' => 'app_espace_comptable', '_controller' => 'App\\Controller\\ComptableController::Espace'], null, null, null, false, false, null]],
        '/Comptable/deconnecter' => [[['_route' => 'app_comptable_deconnexion', '_controller' => 'App\\Controller\\ComptableController::Deconnecter'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/Visiteur/Renseigner/Editer/([^/]++)(*:78)'
                .'|/Comptable/Valider/(?'
                    .'|Actualiser/([^/]++)/(\\d{2}/\\d{4})/([^/]++)(*:149)'
                    .'|Reporter/([^/]++)/(\\d{2}/\\d{4})/([^/]++)(*:197)'
                    .'|Validéé/([^/]++)/(\\d{2}/\\d{4})(*:237)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'app_frais_forfait', '_controller' => 'App\\Controller\\VisiteurController::Editer'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'app_actualiser', '_controller' => 'App\\Controller\\ComptableController::Actualiser'], ['Visiteur', 'FicheFrais', 'FraisForfait'], null, null, false, true, null]],
        197 => [[['_route' => 'app_reporter', '_controller' => 'App\\Controller\\ComptableController::Reporter'], ['Visiteur', 'FicheFrais', 'FraisHorsForfait'], null, null, false, true, null]],
        237 => [
            [['_route' => 'app_validée', '_controller' => 'App\\Controller\\ComptableController::Validée'], ['Visiteur', 'FicheFrais'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
