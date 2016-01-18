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

Requérir ce paquet dans votre composer.json :

```
    "require" : {
        "axn/laravel-dev-utils" : "~1.0.0"
    }
```

Ajouter le dépôt privé à votre composer.json :

```
    "repositories" : [{
            "type" : "vcs",
            "url" : "git@bitbucket.org:axn/laravel-dev-utils.git"
        }
    ]
```

Vous aurez besoin d'une clé SSH pour exécuter la commande suivante :

```
composer update
```

Après la mise à jour composer, ajouter le ServiceProvider au tableau de providers dans config/app.php

```
'Axn\LaravelDevUtils\ServiceProvider',
```

