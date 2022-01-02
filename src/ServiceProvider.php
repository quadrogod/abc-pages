<?php

namespace Quadrogod\Abc\Pages;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Регистрация любых служб приложения.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Загрузка любых служб приложения.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'pages');
        //
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/pages'),
            ]);
        }
    }
}
