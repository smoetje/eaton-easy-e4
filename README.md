# A simple PHP binding package wrapping the interaction with the built-in API of the Eaton Easy E4 programmable logic controller (PLC). For more information about the Eaton json API itself, browse to https://www.eaton.com/flash/eaton/json-api/Default.htm

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smoetje/eaton-easy-e4.svg?style=flat-square)](https://packagist.org/packages/smoetje/eaton-easy-e4)
[![Tests](https://github.com/smoetje/eaton-easy-e4/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/smoetje/eaton-easy-e4/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/smoetje/eaton-easy-e4.svg?style=flat-square)](https://packagist.org/packages/smoetje/eaton-easy-e4)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/eaton-easy-e4.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/eaton-easy-e4)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require smoetje/eaton-easy-e4
```

## Usage

```php
$skeleton = new Smoetje\EatonEasyE4();
echo $skeleton->echoPhrase('Hello, Smoetje!');
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

- [Nicolas Ramoudt](https://github.com/smoetje)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
