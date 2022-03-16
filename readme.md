# Kirby 3 Mobile Detect

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-mobile-detect?color=ae81ff)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-mobile-detect?color=272822)
[![Build Status](https://flat.badgen.net/travis/bnomei/kirby3-mobile-detect)](https://travis-ci.com/bnomei/kirby3-mobile-detect)
[![Coverage Status](https://flat.badgen.net/coveralls/c/github/bnomei/kirby3-mobile-detect)](https://coveralls.io/github/bnomei/kirby3-mobile-detect) 
[![Maintainability](https://flat.badgen.net/codeclimate/maintainability/bnomei/kirby3-mobile-detect)](https://codeclimate.com/github/bnomei/kirby3-monbile-detect) 
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)

Static Class and Page Methods for using [Mobile Detect](https://github.com/serbanghita/).

## Commercial Usage

> <br>
> <b>Support open source!</b><br><br>
> This plugin is free but if you use it in a commercial project please consider to sponsor me or make a donation.<br>
> If my work helped you to make some cash it seems fair to me that I might get a little reward as well, right?<br><br>
> Be kind. Share a little. Thanks.<br><br>
> &dash; Bruno<br>
> &nbsp; 

| M | O | N | E | Y |
|---|----|---|---|---|
| [Github sponsor](https://github.com/sponsors/bnomei) | [Patreon](https://patreon.com/bnomei) | [Buy Me a Coffee](https://buymeacoff.ee/bnomei) | [Paypal dontation](https://www.paypal.me/bnomei/15) | [Hire me](mailto:b@bnomei.com?subject=Kirby) |

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
