Laravel dev utils
=================

Des utilitaires pour le développement en un seul package :

* [CRUD Generator](https://github.com/AXN-Informatique/laravel-crud-generator)
* [Models Generator](https://github.com/AXN-Informatique/laravel-models-generator)
* [IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper)
* [Debugbar](https://github.com/barryvdh/laravel-debugbar)
* Des pages listant les packages externes installés


Installation
------------

Inclure le package avec Composer :

```sh
composer require axn/laravel-dev-utils
```

Après l'installation par Composer, ajouter le ServiceProvider au tableau de providers dans config/app.php

```php
Axn\LaravelDevUtils\ServiceProvider::class,
```

