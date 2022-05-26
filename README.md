
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Ranting field for the Filament forms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yepsua/filament-rating-field.svg?style=flat-square)](https://packagist.org/packages/yepsua/filament-rating-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/yepsua/filament-rating-field/run-tests?label=tests)](https://github.com/yepsua/filament-rating-field/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/yepsua/filament-rating-field/Check%20&%20fix%20styling?label=code%20style)](https://github.com/yepsua/filament-rating-field/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/yepsua/filament-rating-field.svg?style=flat-square)](https://packagist.org/packages/yepsua/filament-rating-field)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/filament-rating-field.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/filament-rating-field)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require yepsua/filament-rating-field
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-rating-field-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-rating-field-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-rating-field-views"
```

## Usage

```php
$filamentRatingField = new Yepsua\FilamentRatingField();
echo $filamentRatingField->echoPhrase('Hello, Yepsua!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/master/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Omar Yepez](https://github.com/oyepez003)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
