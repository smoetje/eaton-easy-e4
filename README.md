# A simple PHP binding package wrapping the interaction with the API of the Eaton Easy E4 PLC

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smoetje/eaton-easy-e4.svg?style=flat-square)](https://packagist.org/packages/smoetje/eaton-easy-e4)
[![Tests](https://github.com/smoetje/eaton-easy-e4/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/smoetje/eaton-easy-e4/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/smoetje/eaton-easy-e4.svg?style=flat-square)](https://packagist.org/packages/smoetje/eaton-easy-e4)

This package can use the built-in API of the Eaton Easy E4 programmable logic controllers (PLC).

For more information about the Eaton json API itself, browse to https://www.eaton.com/flash/eaton/json-api/Default.htm

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
