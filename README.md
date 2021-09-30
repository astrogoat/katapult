# Katapult app for Stratum CMS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/katapult.svg?style=flat-square)](https://packagist.org/packages/astrogoat/katapult)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/katapult/run-tests?label=tests)](https://github.com/astrogoat/katapult/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/katapult/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/katapult/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/katapult.svg?style=flat-square)](https://packagist.org/packages/astrogoat/katapult)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/katapult
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Astrogoat\Katapult\KatapultServiceProvider" --tag="katapult-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Astrogoat\Katapult\KatapultServiceProvider" --tag="katapult-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$katapult = new Astrogoat\Katapult();
echo $katapult->echoPhrase('Hello, Astrogoat!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kristoffer Tonning](https://github.com/tonning)
- [All Contributors](../../contributors)

This katapult package is forked from the awesome [Spatie katapult package](https://github.com/spatie/package-katapult-laravel#support-us). Please go support them if you can.




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
