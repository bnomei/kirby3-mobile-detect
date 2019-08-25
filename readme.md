# Kirby 3 Mobile Detect

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-mobile-detect?color=ae81ff)
![Stars](https://flat.badgen.net/packagist/ghs/bnomei/kirby3-mobile-detect?color=272822)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-mobile-detect?color=272822)
![Issues](https://flat.badgen.net/packagist/ghi/bnomei/kirby3-mobile-detect?color=e6db74)
[![Build Status](https://flat.badgen.net/travis/bnomei/kirby3-mobile-detect)](https://travis-ci.com/bnomei/kirby3-mobile-detect)
[![Coverage Status](https://flat.badgen.net/coveralls/c/github/bnomei/kirby3-mobile-detect)](https://coveralls.io/github/bnomei/kirby3-mobile-detect) 
[![Demo](https://flat.badgen.net/badge/website/examples?color=f92672)](https://kirby3-plugins.bnomei.com/mobile-detect) 
[![Gitter](https://flat.badgen.net/badge/gitter/chat?color=982ab3)](https://gitter.im/bnomei-kirby-3-plugins/community) 
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)


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

> TIP: With `Bnomei\MobileDetect::instance()` you have access to **all** [detections functions](https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples).

## Dependencies

- [Mobile Detect](https://github.com/serbanghita/)

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-mobile-detect/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
