<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SdkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //把门面绑定到资源库中
        $this->app->bind('Card','App\Repositories\CardRepository');
        //接口绑定
        $this->app->bind('App\Interfaces\SdkInterface', 'App\Repositories\CardRepository');
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

    /**
     * 延时加载提供者
     * @return array
     * @author: liuFangShuo
     */
    public function provides()
    {
        return [];
    }
}
