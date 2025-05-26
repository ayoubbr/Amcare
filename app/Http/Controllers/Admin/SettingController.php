<?php
namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Validation\Rule; 
use Illuminate\Validation\Rules\Password; 


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Site Settings Page)
     */
    public function index()
    {
        // $categories is not used in settings.blade.php provided, can be removed if not needed elsewhere by the layout
        $categories = \App\Models\Category::orderBy('name')->get(); // Assuming Category model exists
        $settings = Setting::first();
        if (!$settings) {
            // Create a default settings record if none exists to avoid errors on first load
            $settings = Setting::create([
                'site_name' => 'Amcare', // Default site name
                // Add other default fields here if necessary
            ]);
        }

        return view('admin.settings',  compact('categories', 'settings'));
    }

    /**
     * Update the specified resource in storage.
     * (Site Settings Update)
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'footer_text' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_keys.*' => 'nullable|string|max:50',
            'phone_values.*' => 'nullable|string|max:255',
        ]);

        $settings = Setting::firstOrNew([]);

        if ($request->hasFile('logo')) {
            if ($settings->logo) {
                Storage::disk('public')->delete($settings->logo);
            }
            $path = $request->file('logo')->store('settings', 'public');
            $settings->logo = $path;
        }

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
        $settings->email = $validatedData['email'] ?? $settings->email;
        $settings->footer_text = $validatedData['footer_text'] ?? $settings->footer_text;
        $settings->address = $validatedData['address'] ?? $settings->address;

        $settings->save();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Paramètres du site mis à jour avec succès.');
    }

    /**
     * Update the authenticated admin's profile.
     */
    public function updateAdminProfile(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'new_email' => [
                'nullable',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'current_password' => ['nullable', 'string'], 
            'new_password' => ['nullable', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        ];

        if ($request->filled('new_email') || $request->filled('new_password')) {
            $rules['current_password'] = ['required', 'string'];
        }

        $validatedData = $request->validate($rules, [
            'new_password.confirmed' => 'La confirmation du nouveau mot de passe ne correspond pas.',
            'current_password.required' => 'Le mot de passe actuel est requis pour modifier l\'email ou le mot de passe.',
        ]);

        $updated = false;

        if ($request->filled('new_email') || $request->filled('new_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.'])->withInput();
            }
        }

        if ($request->filled('new_email') && $user->email !== $request->new_email) {
            $user->email = $request->new_email;
            $updated = true;
        }

        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
            $updated = true;
        }

        if ($updated) {
            $user->save();
            return redirect()->route('admin.settings.index')->with('success', 'Profil administrateur mis à jour avec succès.');
        }

        return redirect()->route('admin.settings.index')->with('info', 'Aucune modification n\'a été apportée au profil.');
    }
}