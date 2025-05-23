<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SliderImage;
use App\Models\Zone;

class DashboardController extends Controller
{
    public function index()
    {

        $stats = [
            'pages' => Page::count(),
            'services' => Service::count(),
            'blog_posts' => BlogPost::count(),
            'events' => Event::count(),
            'categories' => Category::count(),
            'faqs' => Faq::count(),
            'slider_images' => SliderImage::count(),
            'partners' => Partner::count(),
        ];

        $posts = BlogPost::with('category')->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::orderBy('name')->get();
        $events = Event::orderBy('event_date', 'desc')->get();
        $services = Service::orderBy('order')->get();
        $zones = Zone::orderBy('name')->get();
        $faqs = Faq::orderBy('created_at')->get();
        $settings = Setting::first();
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        $sliderImages = SliderImage::orderBy('order')->get();
        $partners = Partner::orderBy('order')->get();
        
        $pages = Page::all()->map(function ($page) {
            $page->description = json_decode($page->description, true) ?? [];
            return $page;
        });

        return view('admin.dashboard',  compact(
            'posts', 
        'categories', 
                    'events', 
                    'services', 
                    'zones', 
                    'settings', 
                    'faqs',
           'sliderImages', 
          'partners',
                    'pages'
        ));
    }
}
