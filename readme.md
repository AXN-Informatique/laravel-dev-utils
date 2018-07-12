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
* [Laravel Dump Server](https://github.com/beyondcode/laravel-dump-server)
* [phploc](https://github.com/sebastianbergmann/phploc)

Installation
------------

Install the package with Composer:

```sh
composer require axn/laravel-dev-utils
```

## Volumetric Information

To quickly measuring the size and analyzing the structure of a PHP project run,
run the following command:

```
vendor\bin\phploc --exclude vendor --exclude node_modules --exclude bower_components --exclude _ide_helpers.php --exclude storage --exclude support .\
```
