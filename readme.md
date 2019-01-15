# Kirby 3 Mobile Detect

![GitHub release](https://img.shields.io/github/release/bnomei/kirby3-mobile-detect.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-3%2B-black.svg)

Static Class and Page Methods for using [Mobile Detect](https://github.com/serbanghita/).

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to 
- [make a donation 🍻](https://www.paypal.me/bnomei/1.5) or
- [buy me ☕](https://buymeacoff.ee/bnomei) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/35731?link=1170)

## Installation

- for devkit-setup use `composer require bnomei/kirby3-mobile-detect` or
- extract latest release of [kirby3-mobile-detect.zip](https://github.com/bnomei/kirby3-mobile-detect/releases/download/v1.2.7/kirby3-mobile-detect.zip) as folder `site/plugins/kirby3-mobile-detect`

> Installation as a gitsubmodule is *not* supported.


```php
$detect = $page->detect();
// https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples
$detect->is('Chrome');

$isMobile = $page->isMobile();
// or
$isMobile = Bnomei\MobileDetect::instance()->isMobile();
$isTablet = $page->isTablet();
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-mobile-detect/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
