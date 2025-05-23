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
    // public function index()
    // {
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.pages.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePageRequest $request)
    // {
    //     $data = $request->validated();

    //     if ($data->hasFile('image')) {
    //         $path = $data->file('image')->store('pages', 'public');
    //         $data['image'] = $path;
    //     }

    //     $data['slug'] = Page::createUniqueSlug($data['title']);
    //     Page::create($data);
    //     return redirect()->route('admin.pages.index')
    //         ->with('success', 'Page crée avec succès.');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Page $page)
    // {
    //     return view('admin.pageSection', compact('page'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Page $page)
    // {
    //     return view('admin.dashboard', compact('page'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated(); // Ensure UpdatePageRequest includes 'meta_description'
        
        if ($request->hasFile('image')) {
            if ($page->image) {
                Storage::disk('public')->delete($page->image);
            }
            $path = $request->file('image')->store('pages', 'public');
            $data['image'] = $path;
        } elseif ($request->input('remove_image') == '1') { // Check if remove_image flag is set
            if ($page->image) {
                Storage::disk('public')->delete($page->image);
            }
            $data['image'] = null;
        }
        
        // Regenerate slug if title has changed
        if ($page->title !== $data['title']) {
            $data['slug'] = Page::createUniqueSlug($data['title'], $page->id); // Pass ID to exclude self
        }
        
        // Handle 'description' field (for list items)
        // Ensure it's an array and filter out empty items
        if (isset($data['description']) && is_array($data['description'])) {
            $data['description'] = array_values(array_filter($data['description'], function ($value) {
                return $value !== null && $value !== '';
            }));
        } else {
            // If description is not sent or not an array (e.g. if all items were removed), set to empty array
            $data['description'] = [];
        }
        
        // Handle 'is_published' checkbox
        $data['is_published'] = $request->has('is_published');
        
        
        $page->update($data);
        // dd($data);
        return redirect()->route('admin.dashboard')->with('success', 'Page "' . $page->title . '" mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Page $page)
    // {
    //     if ($page->image) {
    //         Storage::disk('public')->delete($page->image);
    //     }
    //     $page->delete();
    //     return redirect()->route('admin.pages.index')
    //         ->with('success', 'Page supprimée avec succès.');
    // }
}
