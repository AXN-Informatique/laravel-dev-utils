<?php

namespace Axn\LaravelDevUtils;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * The providers to be registered.
     *
     * @var array
     */
    protected $providers = [
        \Axn\CrudGenerator\ServiceProvider::class,
        \Barryvdh\Debugbar\ServiceProvider::class,
        \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
    ];

    /**
     * The aliases to be registered.
     *
     * @var array
     */
    protected $aliases = [
        'Debugbar' => \Barryvdh\Debugbar\Facade::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerProviders();

        $this->registerAliases();
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // routes
        if (!$this->app->routesAreCached()) {
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

    /**
     * Register providers.
     *
     * @return void
     */
    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Register aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $loader = AliasLoader::getInstance();

        foreach ($this->aliases as $class => $alias) {
            $loader->alias($class, $alias);
        }
    }
}
