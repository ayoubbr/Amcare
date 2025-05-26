<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Zone;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\SliderImage;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::published()->ordered()->take(3)->get();
        $events = Event::published()->take(3)->get();
        $posts = BlogPost::published()->take(3)->get();
        $settings = Setting::first();
        $faqs = Faq::orderBy('created_at', 'asc')->take(5)->get();
        $sliderImages = SliderImage::published()->ordered()->get();
        $partners = Partner::published()->ordered()->get();

        $page = Page::published()->where('slug', 'a-propos')->first();
        if ($page) {

            $metaTitle = $page->meta_title ?? $page->title;
            $metaDescription = $page->description ?? '';
        }

        return view('welcome', compact('settings', 'services', 'events', 'posts', 'faqs', 'sliderImages', 'partners', 'page'));
    }

    public function blog()
    {
        $posts = BlogPost::published()
            ->with('category')
            ->paginate(1);

        $categories = Category::orderBy('name')->get();

        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        $settings = Setting::first();

        return view('blogs', compact('posts', 'categories', 'latestPosts'));
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


        $categories = Category::orderBy('name')->get();

        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $settings = Setting::first();

        return view('blogs-details', compact('post', 'relatedPosts', 'categories', 'latestPosts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = BlogPost::published()
            ->where('category_id', $category->id)
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = Category::orderBy('name')->get();

        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('front.category', compact('category', 'posts', 'categories', 'latestPosts'));
    }

    public function page($slug)
    {
        $page = Page::published()->where('slug', $slug)->firstOrFail();

        $metaTitle = $page->meta_title ?? $page->title;
        $metaDescription = $page->description ?? '';
        $settings = Setting::first();

        return view('front.page', compact('page', 'metaTitle', 'description'));
    }

    public function about()
    {
        $page = Page::published()->where('slug', 'a-propos')->where('is_published', true)->first();
        $settings = Setting::first();

        $transport = Page::published()->where('slug', 'transport-securise')->where('is_published', true)->first();
        $demande = Page::published()->where('slug', 'service-sur-demande')->where('is_published', true)->first();
        $urgence = Page::published()->where('slug', 'transport-durgence')->where('is_published', true)->first();

        $characteristics = [$transport, $demande, $urgence];
        $settings = Setting::first();

        if (!$page) {
            abort(404, 'Page not found');
        }

        return view('about', compact('page', 'characteristics'));
    }

    public function services()
    {
        $services = Service::published()->ordered()->get();
        $zones = Zone::orderBy('name')->get();
        $settings = Setting::first();

        return view('services', compact('services', 'zones'));
    }

    public function service($id)
    {
        $service = Service::published()->findOrFail($id);
        $allServices = Service::published()->ordered()->get();
        $faqs = Faq::orderBy('created_at', 'asc')->take(5)->get();
        $settings = Setting::first();

        return view('services-details', compact('service', 'allServices', 'faqs'));
    }

    public function events()
    {
        $events = Event::published()
            ->orderBy('event_date', 'asc')
            ->paginate(2);
        $settings = Setting::first();

        return view('events', compact('events'));
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

        $allEvents = Event::published()
            ->orderBy('event_date', 'asc')
            ->get();

        $settings = Setting::first();

        return view('events-details', compact('event', 'relatedEvents', 'allEvents'));
    }

    public function faqs()
    {
        $faqs = Faq::orderBy('created_at', 'asc')
            ->get();
        $settings = Setting::first();

        return view('faqs', compact('faqs'));
    }

    public function contact()
    {
        $settings = Setting::first();
        return view('contact', compact('settings'));
    }
}
