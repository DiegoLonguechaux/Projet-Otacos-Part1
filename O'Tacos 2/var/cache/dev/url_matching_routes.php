<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_tacos_accueil', '_controller' => 'App\\Controller\\TacosController::accueil'], null, null, null, false, false, null]],
        '/click&collect' => [[['_route' => 'app_tacos_rendertacos', '_controller' => 'App\\Controller\\TacosController::renderTacos'], null, null, null, false, false, null]],
        '/goto/credits' => [[['_route' => 'app_tacos_goto', '_controller' => 'App\\Controller\\TacosController::goto'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)(*:51)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        51 => [
            [['_route' => 'app_tacos_filtertacos', '_controller' => 'App\\Controller\\TacosController::filterTacos'], ['collection'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
