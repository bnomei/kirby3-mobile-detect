# Kirby 3 Mobile Detect

![GitHub release](https://img.shields.io/github/release/bnomei/kirby3-mobile-detect.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-3-black.svg) ![Kirby 3 Pluginkit](https://img.shields.io/badge/Pluginkit-YES-cca000.svg)  [![Build Status](https://travis-ci.com/bnomei/kirby3-mobile-detect.svg?branch=master)](https://travis-ci.com/bnomei/kirby3-mobile-detect) [![Coverage Status](https://coveralls.io/repos/github/bnomei/kirby3-mobile-detect/badge.svg?branch=master)](https://coveralls.io/github/bnomei/kirby3-mobile-detect?branch=master) [![Gitter](https://badges.gitter.im/bnomei-kirby-3-plugins/community.svg)](https://gitter.im/bnomei-kirby-3-plugins/community?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)


Static Class and Page Methods for using [Mobile Detect](https://github.com/serbanghita/).

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to 
- [make a donation 🍻](https://www.paypal.me/bnomei/1.5) or
- [buy me ☕](https://buymeacoff.ee/bnomei) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/35731?link=1170)

## Installation

- unzip [master.zip](https://github.com/bnomei/kirby3-mobile-detect/archive/master.zip) as folder `site/plugins/kirby3-mobile-detect` or
- `git submodule add https://github.com/bnomei/kirby3-mobile-detect.git site/plugins/kirby3-mobile-detect` or
- `composer require bnomei/kirby3-mobile-detect`


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
