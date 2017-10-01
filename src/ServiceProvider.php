<?php

namespace Axn\LaravelDevUtils;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ServiceProvider extends BaseServiceProvider
{
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
        //..
    }

    /**
     * Register providers.
     *
     * @return void
     */
    protected function registerProviders()
    {
        //..
    }
}
