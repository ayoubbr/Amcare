<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer('shared.header', function ($view) {
            $view->with([
                'events' => Event::all(),
                'services' => Service::all()
            ]);
        });
    }
}
