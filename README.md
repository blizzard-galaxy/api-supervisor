# API Supervisor

[![Latest Version](https://img.shields.io/github/release/blizzard-galaxy/api-supervisor.svg?style=flat-square)](https://github.com/blizzard-galaxy/api-supervisor/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/blizzard-galaxy/api-supervisor/master.svg?style=flat-square)](https://travis-ci.org/blizzard-galaxy/api-supervisor)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/blizzard-galaxy/api-supervisor.svg?style=flat-square)](https://scrutinizer-ci.com/g/blizzard-galaxy/api-supervisor/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/blizzard-galaxy/api-supervisor.svg?style=flat-square)](https://scrutinizer-ci.com/g/blizzard-galaxy/api-supervisor)
[![Total Downloads](https://img.shields.io/packagist/dt/league/api-supervisor.svg?style=flat-square)](https://packagist.org/packages/blizzard-galaxy/api-supervisor)

This package is a PHP integration layer for the Blizzard API. It contains methods for easily consuming the API and retrieving the information into dedicated entities.

## Install

Via Composer

``` bash
$ composer require blizzard-galaxy/api-supervisor
```

## Usage

``` php
$skeleton = new BlizzardGalaxy\ApiSupervisor();
echo $skeleton->echoPhrase('Hello, League!');
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email petre@dreamlabs.ro instead of using the issue tracker.

## Credits

- [petre@dreamlabs.ro](https://github.com/petrepatrasc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
