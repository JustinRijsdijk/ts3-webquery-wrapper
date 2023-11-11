<?php

namespace Justinrijsdijk\Ts3WebqueryWrapper;

use Illuminate\Support\ServiceProvider;

class Ts3WebqueryWrapperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ts3-webquery-wrapper');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'ts3-webquery-wrapper');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('ts3-webquery-wrapper.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/ts3-webquery-wrapper'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/ts3-webquery-wrapper'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/ts3-webquery-wrapper'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ts3-webquery-wrapper');

        // Register the main class to use with the facade
        $this->app->singleton('ts3-webquery-wrapper', function () {
            return new Ts3WebqueryWrapper;
        });
    }
}
