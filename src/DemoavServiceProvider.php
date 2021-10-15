<?php

namespace Bytefum\Demoav;

use Illuminate\Support\ServiceProvider;

class DemoavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Bytefum\Demoav\DemoavController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'demoav');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/bytefum/demoav'),
        ]);
    }
}
