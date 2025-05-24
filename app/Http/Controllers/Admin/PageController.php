<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        $pages = Page::orderBy('title')->get();

        return view('admin.pages',  compact(
            'categories',
            'pages'
        ));
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
        } elseif ($request->input('remove_image') == '1') {
            if ($page->image) {
                Storage::disk('public')->delete($page->image);
            }
            $data['image'] = null;
        }

        if ($page->title !== $data['title']) {
            $data['slug'] = Page::createUniqueSlug($data['title'], $page->id); // Pass ID to exclude self
        }

        if (isset($data['description']) && is_array($data['description'])) {
            $data['description'] = array_values(array_filter($data['description'], function ($value) {
                return $value !== null && $value !== '';
            }));
        } else {
            $data['description'] = [];
        }

        $data['is_published'] = $request->has('is_published');
        $page->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page "' . $page->title . '" mise à jour avec succès.');
    }
}
