# Two-step verification

Twostep is a **PHP version of Google's two-step authentication** library. The package includes ServiceProviders and Facades for easy **Laravel 4** integration.

[![Build Status](https://travis-ci.org/abelorosz/twostep.png?branch=master)](https://travis-ci.org/abelorosz/twostep)

## Requirements
    
- PHP >=5.3

## Usage

- Use ```Twostep::generateSecret()``` for generating the secret key
- Use ```Twostep::checkCode(code, secret)``` for checking the code
- Use ```Twostep::getUrl(user, hostname, secret)``` for generating the QR code url
- Use ```Twostep::getCode(secret, ?time)``` for generating a code (for a given time)

## Installation

The best way to install Intervention Image is quickly and easily with [Composer](http://getcomposer.org).

Twostep is available via [Packagist](https://packagist.org/packages/abelorosz/twostep).

Require the package via Composer in your ```composer.json```.

```json
"abelorosz/twostep": "dev-master"
```

Run Composer to install or update the new requirement.

```bash
$ php composer.phar install
```

or

```bash
$ php composer.phar update
```

Now you are able to require the vendor/autoload.php file to PSR-0 autoload the library.

## Laravel 4 Integration

Twostep has optional support for [Laravel 4](http://laravel.com/) and comes with a Service Provider and Facades for easy integration. After you have installed Twostep correctly, just follow the instructions.

Open your Laravel config file ```config/app.php``` and add the following lines.

In the ```$providers``` array add the service providers for this package.

```php
'Abelorosz\Twostep\TwostepServiceProvider',
```

Add the facade of this package to the ```$aliases``` array.

```php
'Twostep'         => 'Abelorosz\Twostep\Facades\Twostep',
```

Now Twostep will be auto-loaded by Laravel.

## License

Twostep is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright (c) 2014 [Abel Orosz](http://abelorosz.com)