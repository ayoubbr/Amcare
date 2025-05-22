<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Page;
use App\Models\Service;

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

        return view('admin.dashboard', compact('stats'));
    }
}
