<?php

namespace Irabbi360\LaravelVideoable;

use Illuminate\Support\ServiceProvider;

class LaravelVideoableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-videoable');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-videoable');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-videoable.php'),
            ], 'config');

            if (! class_exists('CreateVideosTable')) {
                $timestamp = date('Y_m_d_His', time());
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_video_table.php.stub' => $this->app->databasePath() . '/migrations/' . $timestamp . '_create_videos_table.php',
                ], 'migrations');

            }

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-videoable'),
            ], 'views');

            // Publishing assets.
            // $this->publishes([
            //     __DIR__.'/../resources/assets' => public_path('vendor/laravel-videoable'),
            // ], 'assets');

            // Publishing the translation files.
            // $this->publishes([
            //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-videoable'),
            // ], 'lang');

            // Registering package commands.
            $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-videoable');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-videoable', function () {
            return new LaravelVideoable;
        });
    }
}
