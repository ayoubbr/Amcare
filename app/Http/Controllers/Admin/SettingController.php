<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\SliderImage;
use App\Models\Zone;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        $settings = Setting::first();

        return view('admin.settings',  compact('categories', 'settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footer_text' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_keys.*' => 'nullable|string|max:50',
            'phone_values.*' => 'nullable|string|max:255',
        ]);

        $settings = Setting::firstOrNew([]); // Find the first settings record or create a new one

        // Handle logo upload
        if ($request->hasFile('logo')) {
            if ($settings->logo) {
                Storage::disk('public')->delete($settings->logo); // Delete old logo
            }
            $path = $request->file('logo')->store('settings', 'public');
            $settings->logo = $path;
        }

        // Handle multiple phone numbers
        $phones = [];
        if ($request->has('phone_keys') && $request->has('phone_values')) {
            $phoneKeys = $request->input('phone_keys');
            $phoneValues = $request->input('phone_values');

            foreach ($phoneKeys as $index => $key) {
                $value = $phoneValues[$index] ?? null;
                if (!empty($key) && !empty($value)) {
                    $phones[$key] = $value;
                }
            }
        }
        $settings->phones = $phones;

        $settings->site_name = $validatedData['site_name'];
        $settings->email = $validatedData['email'];
        $settings->footer_text = $validatedData['footer_text'];
        $settings->address = $validatedData['address'];

        $settings->save();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Paramètres du site mis à jour avec succès.');
    }
}
