<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
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

    public function blog()
    {
        $posts = BlogPost::published()
                    ->with('category')
                    ->orderBy('published_at', 'desc')
                    ->paginate(9);
    
        return view('front.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = BlogPost::published()
                    ->where('slug', $slug)
                    ->with('category')
                    ->firstOrFail();
        $relatedPosts = BlogPost::published()
                            ->where('id', '!=', $post->id)
                            ->where('category_id', $post->category_id)
                            ->take(3)
                            ->get();
    
        return view('front.post', compact('post', 'relatedPosts'));
    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
    
        $posts = BlogPost::published()
                    ->where('category_id', $category->id)
                    ->orderBy('published_at', 'desc')
                    ->paginate(9);
    
        return view('front.category', compact('category', 'posts'));
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
        $upcomingEvents = Event::published()
                        ->where('event_date', '>=', now())
                        ->orderBy('event_date', 'asc')
                        ->get();
                        
        $pastEvents = Event::published()
                    ->where('event_date', '<', now())
                    ->orderBy('event_date', 'desc')
                    ->take(5)
                    ->get();
    
        return view('front.events', compact('upcomingEvents', 'pastEvents'));
    }

    public function event($slug)
    {
        $event = Event::published()
                ->where('slug', $slug)
                ->firstOrFail();
    
        $relatedEvents = Event::published()
                        ->where('id', '!=', $event->id)
                        ->where('event_date', '>=', now())
                        ->orderBy('event_date', 'asc')
                        ->take(3)
                        ->get();
        return view('front.event', compact('event', 'relatedEvents'));
    }

}
