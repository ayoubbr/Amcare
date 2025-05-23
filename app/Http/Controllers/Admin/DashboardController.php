<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Page;
use App\Models\Service;
use App\Models\Zone;

class DashboardController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $categories = Category::all();
        $events = Event::all();
        $services = Service::all();
        $zones = Zone::all();

        $stats = [
            'pages' => Page::count(),
            'services' => Service::count(),
            'blog_posts' => BlogPost::count(),
            'events' => Event::count(),
            'categories' => Category::count()
        ];

        return view('admin.dashboard', compact( 
            'categories',
            'events', 
            'services', 'zones', 
            'pages',
            'stats'
        ));
    }
}
