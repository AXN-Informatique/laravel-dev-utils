# Laravel dev utils

Des utilitaires pour le développement en un seul package :

* [CRUD Generator](https://bitbucket.org/axn/laravel-crud-generator)
* [IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper)
* [Debugbar](https://github.com/barryvdh/laravel-debugbar)
* Des pages listant les packages externes installés

---

* [Installation](#markdown-header-installation)
* [changelog](changelog.md) :arrow_upper_right:


## Installation

Inclure le package avec Composer :

```
composer require axn/laravel-dev-utils
```

Après l'installation par Composer, ajouter le ServiceProvider au tableau de providers dans config/app.php

```
Axn\LaravelDevUtils\ServiceProvider::class,
```

