# php-cs-fixer-config

[![Packagist](https://img.shields.io/packagist/v/soosyze/php-cs-fixer-config.svg)](https://packagist.org/packages/soosyze/php-cs-fixer-config "Packagist")

`PhpCsFixer` config for Soosyze projects.

## Installation

### Composer

To install **Soosyze\PhpCsFixer** via Composer you must have the installer or the binary file [Composer](https://getcomposer.org/download/)

Go to your project directory, open a command prompt and run the following command:
```sh
composer require soosyze/queryflatfile --no-dev
```

## Uage

Create a configuration file `.php-cs-fixer.dist.php` in the root of your project:

```php
<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('build')
    ->in(__DIR__);

$config = new Soosyze\PhpCsFixer\Config();
$config->setFinder($finder);

return $config;
```

## License

Inspired by [BedrockStreaming/php-cs-fixer-config](https://github.com/BedrockStreaming/php-cs-fixer-config).
This project is licensed under the MIT license.
