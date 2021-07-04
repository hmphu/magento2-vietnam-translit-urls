# magento2-vietnam-translit-urls

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)


## Purpose

The common Vietnamese characters are automatically adapted when URLs are created, but some accented characters are not converted. For example, an `ồ` becomes a `_`. This module solves this problem and converts characters correctly in URLs (`ồ` => `o`, `ừ` => `u` ...)

## Restrictions

This module only affects the URL generation when URLs are auto-generated, i.e. when a new Product / Category / CMS Page is created, but the field "URL Key" is left empty. In that case, the URL key is being generated from the name. It doesn't affect existing Products / Categories / CMS Pages, as URL Keys are already generated for them.

## Installation

1. Install via composer
    ```
    composer require hmphu/magento2-vietnam-translit-urls
    ```
2. Enable module
    ```
    bin/magento setup:upgrade
    ```

## Configuration

Zero configuration needed.

## Credits

- [Phu Hoang][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.txt) for more information.

[ico-version]: https://img.shields.io/packagist/v/hmphu/magento2-vietnam-translit-urls.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/hmphu/magento2-vietnam-translit-urls
[link-author]: https://github.com/hmphu
[link-contributors]: ../../contributors
