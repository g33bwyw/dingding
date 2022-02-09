<?php

namespace G33bwyw\DingDing;

use Illuminate\Support\ServiceProvider;

class DingDingServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
            __DIR__.'/routes' => base_path('routes/vendor'),  // 发布控制器到
        ]);
    }

}
