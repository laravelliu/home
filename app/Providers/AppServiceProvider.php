<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Barryvdh\Debugbar\ServiceProvider as DebugerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //只有本地加载
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
            $this->app->register(DebugerServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
