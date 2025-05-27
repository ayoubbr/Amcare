<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::ordered()->get();
        $categories = Category::orderBy('name')->get();

        return view('admin.services', compact('services', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Service::createUniqueSlug($data['title']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $data['image'] = $path;
        }

        if (!isset($data['order'])) {
            $data['order'] = Service::max('order') + 1;
        }

        $service = Service::create($data);

        if (isset($validated['zones'])) {
            $service->regions()->sync($data['zones']);
        }

        return redirect()->route('admin.services.index')
            ->with('success', 'Service créé avec succès.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $path = $request->file('image')->store('service', 'public');
            $data['image'] = $path;

            if (!isset($data['order'])) {
                $data['order'] = Service::max('order') + 1;
            }
        }

        if ($service->title !== $data['title']) {
            $data['slug'] = Service::createUniqueSlug($data['title']);
        }

        $service->update($data);
        return redirect()->route('admin.services.index')
            ->with('success', 'Service mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
        return redirect()->route('admin.services.index')
            ->with('success', 'Service supprimé avec succès.');
    }
}
