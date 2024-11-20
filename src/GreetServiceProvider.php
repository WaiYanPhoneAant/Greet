<?php

namespace Wypa\Greet;

use Illuminate\Support\ServiceProvider;

class GreetServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings here
        $this->app->singleton('greet', function () {
            return new Greet();
        });
    }

    public function boot()
    {
        // No file binding; load views if necessary
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'greet');
    }
}
