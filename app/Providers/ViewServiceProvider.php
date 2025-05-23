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
                'events' => Event::published()->orderBy('created_at', 'desc')->take(5)->get(),
                'services' =>  Service::published()->ordered()->take(5)->get()
            ]);
        });
    }
}
