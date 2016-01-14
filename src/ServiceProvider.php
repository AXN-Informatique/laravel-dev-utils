<?php

namespace Axn\LaravelDevUtils;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // routes
        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        // breadcrumbs
        require __DIR__ . '/breadcrumbs.php';

        // views
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'dev-utils');

        $this->publishes([
            __DIR__ . '/../resources/views/' => base_path('resources/views/vendor/dev-utils'),
        ], 'dev-utils.views');
    }
}
