<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class PluginsRouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->routes(function () {
            Route::prefix('plugins/node-profile')
                ->middleware(['web','auth'])
                ->group(base_path('plugins/node-profile/routes/web.php'));
        });
    }
}
