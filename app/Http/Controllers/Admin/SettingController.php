<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::getAllSettings();
        return view('admin.settings.index', compact('settings'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $settings = Setting::first() ?? new Setting();
        return view('admin.settings.edit', compact('settings'));
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

        return redirect()->route('admin.dashboard')
            ->with('success', 'Paramètres du site mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
