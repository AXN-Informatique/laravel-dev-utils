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
* [Laravel N+1 Query Detector](https://github.com/beyondcode/laravel-query-detector)
* [phploc](https://github.com/sebastianbergmann/phploc)

Installation
------------

Install the package with Composer:

```sh
composer require axn/laravel-dev-utils
```

## Volumetric Information (phploc)

To quickly measuring the size and analyzing the structure of a PHP project run,
run the following command:

```
vendor\bin\phploc --exclude vendor --exclude node_modules --exclude _ide_helpers.php --exclude storage --exclude support .\
```
