<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Event;
use App\Models\Page;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::published()->ordered()->take(3)->get();
        $events = Event::published()->upcoming()->take(3)->get();
        $posts = BlogPost::published()->take(3)->get();        
        return view('front.home', compact('services', 'events', 'posts'));
    }

    public function page($slug)
    {
        $page = Page::published()->where('slug', $slug)->firstOrFail();
        return view('front.page', compact('page'));
    }

    public function about()
    {
        $page = Page::published()->where('slug', 'about-us')->first();        
        return view('front.about', compact('page'));
    }

    public function services()
    {
        $services = Service::published()->ordered()->get();
        return view('front.services', compact('services'));
    }


    public function service($id)
    {
        $service = Service::published()->findOrFail($id);
        return view('front.service', compact('service'));
    }

    public function events()
    {
        $upcoming = Event::published()->upcoming()->get();
        $past = Event::published()->past()->take(5)->get();
        
        return view('front.events', compact('upcoming', 'past'));
    }

}
