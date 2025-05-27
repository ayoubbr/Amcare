<?php

namespace App\Http\Controllers\Admin;

use App\Models\Zone;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zones = Zone::all();
        $categories = Category::orderBy('name')->get();

        return view('admin.zones', compact('zones', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreZoneRequest $request)
    {
        $validate = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('zones', 'public');
            $validate['image'] = $path;
        }
        Zone::create($validate);

        return redirect()->route('admin.zones.index')
            ->with('success', 'Zone créée avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($zone->image) {
                Storage::disk('public')->delete($zone->image);
            }
            $path = $request->file('image')->store('zones', 'public');
            $data['image'] = $path;
        }

        $zone->update($data);

        return redirect()->route('admin.zones.index')
            ->with('success', 'Zone mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $zone)
    {
        $zone->delete();

        return redirect()->route('admin.zones.index')
            ->with('success', 'Zone supprimée avec succès.');
    }
}
