# This is my package smartexpense

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jrpikong/smartexpense.svg?style=flat-square)](https://packagist.org/packages/jrpikong/smartexpense)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jrpikong/smartexpense/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jrpikong/smartexpense/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jrpikong/smartexpense/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jrpikong/smartexpense/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jrpikong/smartexpense.svg?style=flat-square)](https://packagist.org/packages/jrpikong/smartexpense)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jrpikong/smartexpense
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="smartexpense-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="smartexpense-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="smartexpense-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$smartExpense = new Jrpikong\SmartExpense();
echo $smartExpense->echoPhrase('Hello, Jrpikong!');
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

- [Deny Utama](https://github.com/jrpikong)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
