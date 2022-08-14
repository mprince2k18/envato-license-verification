## Installation

You can install the package via composer:

```bash
composer require mprince2k18/envato-license-verification
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="envato-license-verification-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="envato-license-verification-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="envato-license-verification-views"
```

## Usage

```php
$envatoLicenseVerification = new Mprince2k18\EnvatoLicenseVerification();
echo $envatoLicenseVerification->echoPhrase('Hello, Mprince2k18!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/mprince2k18/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohammad Prince](https://github.com/mprince2k18)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
