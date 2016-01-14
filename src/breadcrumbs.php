<?php

Breadcrumbs::register('dev-utils:index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Utilitaires développement', route('dev-utils:index'));
});

    Breadcrumbs::register('dev-utils:packages.index', function($breadcrumbs)
    {
        $breadcrumbs->parent('dev-utils:index');
        $breadcrumbs->push('Packages', route('dev-utils:packages.index'));
    });

        Breadcrumbs::register('dev-utils:packages.composer', function($breadcrumbs)
        {
            $breadcrumbs->parent('dev-utils:packages.index');
            $breadcrumbs->push('Composer', route('dev-utils:packages.composer'));
        });

        Breadcrumbs::register('docs.packages.bower', function($breadcrumbs)
        {
            $breadcrumbs->parent('dev-utils:packages.index');
            $breadcrumbs->push('Bower', route('dev-utils:packages.bower'));
        });
