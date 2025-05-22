<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
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
            'categories' => Category::count()
        ];

        $posts = BlogPost::with('category')->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::orderBy('name')->get();

        $events = Event::orderBy('event_date', 'desc')->get();
        $services = Service::orderBy('order')->get();
        $zones = Zone::orderBy('name')->get();
        $settings = Setting::first();

        return view('admin.dashboard',  compact('posts', 'categories', 'events', 'services', 'zones', 'settings'));
    }
}
