<?php

namespace maximuse\HelloWorld;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('calculator', function ($app) {
            return new Calculator();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallHelloWorld::class,
            ]);
        }
    }
}
