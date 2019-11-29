<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TencentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Tencent','App\Repositories\TencentRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
