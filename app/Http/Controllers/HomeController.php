<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\ExtraSetting;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Zone;
use App\Models\Partner;
use App\Models\SliderImage;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::published()->ordered()->take(4)->get();
        $events = Event::published()->take(3)->get();
        $posts = BlogPost::published()->take(3)->get();
        $faqs = Faq::orderBy('created_at', 'asc')->take(5)->get();
        $sliderImages = SliderImage::published()->ordered()->get();
        $partners = Partner::published()->ordered()->get();
        $extraSettings = ExtraSetting::where('key', 'frontline_staff')->orWhere('key', 'specialized_vehicles')->orWhere('key', 'patients_served')->orderBy('order', 'asc')->get();

        $page = Page::published()->where('slug', 'a-propos')->first();
        if ($page) {
            $metaTitle = $page->meta_title ?? $page->title;
            $metaDescription = $page->description ?? '';
        }

        return view('welcome', compact('services', 'events', 'posts', 'faqs', 'sliderImages', 'partners', 'page', 'extraSettings'));
    }

    public function blog()
    {
        $posts = BlogPost::published()
            ->with('category')
            ->paginate(4);

        $categories = Category::orderBy('name')->get();

        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

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

        return view('blogs-details', compact('post', 'relatedPosts', 'categories', 'latestPosts'));
    }

    public function about()
    {
        $page = Page::published()->where('slug', 'a-propos')->where('is_published', true)->first();

        $transport = Page::published()->where('slug', 'transport-securise')->where('is_published', true)->first();
        $demande = Page::published()->where('slug', 'service-sur-demande')->where('is_published', true)->first();
        $urgence = Page::published()->where('slug', 'transport-durgence')->where('is_published', true)->first();

        $characteristics = [$transport, $demande, $urgence];

        if (!$page) {
            abort(404, 'Page not found');
        }

        return view('about', compact('page', 'characteristics'));
    }

    public function zones()
    {
        $zones = Zone::where('is_active', true)->orderBy('name', 'asc')->get();

        return view('zones', compact('zones'));
    }

    public function service($slug)
    {
        $service = Service::published()->where('slug', $slug)->firstOrFail();
        $allServices = Service::published()->ordered()->get();
        $faqs = Faq::orderBy('created_at', 'asc')->take(5)->get();

        return view('services-details', compact('service', 'allServices', 'faqs'));
    }

    public function events()
    {
        $events = Event::published()
            ->orderBy('event_date', 'asc')
            ->paginate(2);

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

        return view('events-details', compact('event', 'relatedEvents', 'allEvents'));
    }

    public function faqs()
    {
        $faqs = Faq::orderBy('created_at', 'asc')->paginate(5);
        $expYears = ExtraSetting::where('key', 'annees_experience')->first();

        return view('faqs', compact('faqs', 'expYears'));
    }

    public function contact()
    {
        return view('contact');
    }
}
