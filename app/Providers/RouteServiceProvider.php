<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // parent::boot();

        // Wrap every route to require .html suffix
        Route::macro('html', function () {
            return function ($uri, $action) {
                if (is_string($action)) {
                    $action = ['uses' => $action];
                }
                // Add .html suffix
                return Route::get("$uri.html", $action);
            };
        });
    }
}
