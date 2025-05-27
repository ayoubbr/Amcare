<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
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
                'services' =>  Service::published()->ordered()->take(5)->get(),
                'settings' => Setting::first(),
                'pages' =>  Page::where('slug', 'a-propos')->get()
            ]);
        });

        View::composer('shared.footer', function ($view) {
            $view->with([
                'events' => Event::published()->orderBy('created_at', 'desc')->take(5)->get(),
                'services' =>  Service::published()->ordered()->take(5)->get(),
                'settings' => Setting::first(),
                'faqs' =>  Faq::orderBy('created_at', 'asc')->take(5)->get(),
            ]);
        });

        $settings = Setting::first();
        View::share('settings', $settings);
    }
}
