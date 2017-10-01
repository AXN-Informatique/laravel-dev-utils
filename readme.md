Laravel dev utils
=================

Several useful packages for development in one package:

* [Tinker](https://github.com/laravel/tinker)
* [IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper)
* [Debugbar](https://github.com/barryvdh/laravel-debugbar)
* [Interactive make command](https://github.com/laracademy/interactive-make)
* [Laroute (simplified)](https://github.com/AXN-Informatique/laravel-laroute)
* [CRUD Generator](https://github.com/AXN-Informatique/laravel-crud-generator)
* [Models Generator](https://github.com/AXN-Informatique/laravel-models-generator)

Installation
------------

Install the package with Composer:

```sh
composer require axn/laravel-dev-utils
```

In Laravel 5.5 the service provider will automatically get registered.
In older versions of the framework just add the service provider
to the array of providers in `config/app.php`:

```php
'providers' => [
    // ...
    Axn\LaravelDevUtils\ServiceProvider::class,
],
```
