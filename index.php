<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bnomei/mobile-detect', [
    'pageMethods' => [
        'isMobile' => function () {
            return Bnomei\MobileDetect::instance()->isMobile();
        },
        'isTablet' => function () {
            return Bnomei\MobileDetect::instance()->isTablet();
        },
        'detect' => function () {
            return Bnomei\MobileDetect::instance();
        },
    ]
]);
