<?php

namespace Moneypal\Gateway;

use Illuminate\Support\ServiceProvider;

class MoneypalServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('moneypal', function () {
            return new Moneypal;
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/moneypal.php' => config_path('moneypal.php'),
        ], 'config');
    }
}
