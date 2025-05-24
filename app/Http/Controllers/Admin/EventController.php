<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $categories = Category::orderBy('name')->get();

        return view('admin.events', compact('events', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $reqst = $request->validated();

        $reqst['slug'] = Event::createUniqueSlug($reqst['title']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $reqst['image'] = $path;
        }

        Event::create($reqst);

        return redirect()->route('admin.events.index')
            ->with('success', 'Événement créé avec succès.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $reqst = $request->validated();

        if ($event->title !== $reqst['title']) {
            $reqst['slug'] = Event::createUniqueSlug($reqst['title']);
        }
        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $path = $request->file('image')->store('events', 'public');
            $reqst['image'] = $path;
        }

        $event->update($reqst);

        return redirect()->route('admin.events.index')
            ->with('success', 'Événement mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();
        return redirect()->route('admin.events.index')
            ->with('success', 'Evénement supprime avec succès.');
    }

}
