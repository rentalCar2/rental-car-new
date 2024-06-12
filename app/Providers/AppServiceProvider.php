<?php

namespace App\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Route::macro('scene', function($scene = null) {
            $action = Route::getAction();
            $action['_scene'] = $scene;
            Route::setAction($action);
        });
    }
}
