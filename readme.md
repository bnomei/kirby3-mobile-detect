# Kirby 3 Mobile Detect

![GitHub release](https://img.shields.io/github/release/bnomei/kirby3-mobile-detect.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-3%2B-black.svg)

Static Class and Page Methods for using [Mobile Detect](https://github.com/serbanghita/).

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
