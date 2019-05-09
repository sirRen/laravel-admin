<?php

namespace Easy\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true; // 延迟加载服务
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/eadmin.php' => config_path('eadmin.php'), // 发布配置文件到 laravel 的config 下
        ]);
        $this->loadRoutesFrom(__DIR__."/router/web.php");
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
//        $this->app->singleton('packagetest', function ($app) {
//            return new Packagetest($app['session'], $app['config']);
//        });
        $this->mergeConfigFrom(__DIR__."/config/eadmin.php","eadmin");

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
//        return ['packagetest'];
    }
}
