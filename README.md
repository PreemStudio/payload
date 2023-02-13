# This is my package payload

[![Latest Version on Packagist](https://img.shields.io/packagist/v/preemstudio/payload.svg?style=flat-square)](https://packagist.org/packages/preemstudio/payload)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/payload/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/preemstudio/payload/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/payload/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/preemstudio/payload/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/preemstudio/payload.svg?style=flat-square)](https://packagist.org/packages/preemstudio/payload)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require preemstudio/payload
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="payload-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="payload-config"
```

This is the contents of the published config file:

```php
return [
    //
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="payload-views"
```

## Usage

Check our [test suite](/tests) for usage examples.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you've found a bug regarding security please mail [security@preem.studio](mailto:security@preem.studio) instead of using the issue tracker.

## Credits

- [Preem Studio](https://github.com/PreemStudio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
