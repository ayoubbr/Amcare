<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliderImages = SliderImage::orderBy('order')->get();
        return view('admin.dashboard', compact('sliderImages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_published' => 'boolean',
        ]);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('slider_images', 'public');
            $validatedData['image_path'] = $path;
        }

        SliderImage::create($validatedData);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Image du slider ajoutée avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SliderImage $sliderImage)
    {
        $validatedData = $request->validate([
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_published' => 'boolean',
        ]);

        if ($request->hasFile('image_path')) {
            if ($sliderImage->image_path) {
                Storage::disk('public')->delete($sliderImage->image_path);
            }
            $path = $request->file('image_path')->store('slider_images', 'public');
            $validatedData['image_path'] = $path;
        }

        $sliderImage->update($validatedData);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Image du slider mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SliderImage $sliderImage)
    {
        if ($sliderImage->image_path) {
            Storage::disk('public')->delete($sliderImage->image_path);
        }
        $sliderImage->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Image du slider supprimée avec succès.');
    }
}
