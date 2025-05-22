<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('pages', 'public');
            $data['image'] = $path;
        }

        $data['slug'] = Page::createUniqueSlug($data['title']);
        Page::create($data);
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page crée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($page->image) {
                Storage::disk('public')->delete($page->image);
            }
            
            $path = $request->file('image')->store('pages', 'public');
            $data['image'] = $path;
        }

        if ($page->title !== $data['title']) {
            $data['slug'] = Page::createUniqueSlug($data['title']);
        }
        $page->update($data);
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        if ($page->image) {
            Storage::disk('public')->delete($page->image);
        }
        $page->delete();
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page supprimée avec succès.');
    }

    public function preview(Page $page)
    {
        return view('front.page', compact('page'));
    }

    public function togglePublish(Page $page)
    {
        $page->is_published = !$page->is_published;
        $page->save();
        
        return redirect()->route('admin.pages.index')
            ->with('success', $page->is_published ? 'Page publiée avec succès.' : 'Page dépubliée avec succès.');
    }   
}
