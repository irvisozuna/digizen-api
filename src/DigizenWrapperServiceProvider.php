<?php

namespace IrvisOzuna\DigizenWrapper;

use Illuminate\Support\ServiceProvider;

class DigizenWrapperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'irvisozuna');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'irvisozuna');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadRoutesFrom(__DIR__.'/Routes/api.php');
        $this->publishes([
            __DIR__.'/../config/digizenwrapper.php' => config_path('digizenwrapper.php'),
        ], 'digizenwrapper.config');
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/digizenwrapper.php' => config_path('digizenwrapper.php'),
            ], 'digizenwrapper.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/irvisozuna'),
            ], 'digizenwrapper.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/irvisozuna'),
            ], 'digizenwrapper.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/irvisozuna'),
            ], 'digizenwrapper.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/digizenwrapper.php', 'digizenwrapper');

        // Register the service the package provides.
       /* $this->app->singleton('digizenwrapper', function ($app) {
            return new DigizenWrapper;
        });*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['digizenwrapper'];
    }
}