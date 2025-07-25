<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Called before routes are registered.
     */
    public function boot(): void
    {
        // Load the auth.php file if it exists
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            if (file_exists(base_path('routes/auth.php'))) {
                Route::middleware('web')
                    ->group(base_path('routes/auth.php'));
            }

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
