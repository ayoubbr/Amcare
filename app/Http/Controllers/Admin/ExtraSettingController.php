<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ExtraSetting;
use App\Models\Setting; // For layout
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExtraSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::first();
        $categories = Category::get();
        $extraSettings = ExtraSetting::orderBy('order', 'asc')->get();

        return view('admin.extra-settings', compact('extraSettings', 'settings', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExtraSetting $extraSetting)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'value_suffix' => 'nullable|string|max:50',
            'order' => 'required|integer',
        ]);

        $extraSetting->update($validatedData);

        return redirect()->route('admin.extra-settings.index')
            ->with('success', 'Paramètre supplémentaire "' . $extraSetting->label . '" mis à jour avec succès.');
    }
}
