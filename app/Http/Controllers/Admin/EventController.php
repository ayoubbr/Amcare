<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishedEvents = Event::published()->get();

        $upCommingEvents = Event::upComming()->get();

        $pastEvents = Event::past()->get();

        return view('admin.events.index', compact(
            'publishedEvents',
            'upCommingEvents',
            'pastEvents',
         ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $reqst = $request->validated();

        $reqst['slug'] = Event::createUniqueSlug($reqst['title']);

        if ($reqst->hasFile('image')) {
            $path = $reqst->file('image')->store('events', 'public');
            $reqst['image'] = $path;
        }

        Event::create($reqst);

        return redirect()->route('admin.events.index')
            ->with('success', 'Événement créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
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
        if ($reqst->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $path = $reqst->file('image')->store('events', 'public');
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
        if($event->image) {
            Storage::disk('public')->delete($event->image);
        }
        $event->delete();
        return redirect()->view('admin.events.index')
                        ->with('succès', 'Evénement crée avec succès.');
    }

    public function togglePublish(Event $event)
    {
        $event->is_published = !$event->is_published;
        $event->save();
        
        return redirect()->route('admin.events.index')
            ->with('success', $event->is_published ? 'Événement publié avec succès.' : 'Événement dépublié avec succès.');
    }
}
