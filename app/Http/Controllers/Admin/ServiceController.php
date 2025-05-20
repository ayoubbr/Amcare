<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Controllers\Controller;
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

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        if ($data->hasFile('image')) {
            $path = $data->file('image')->store('services', 'public');
            $data['image'] = $path;
        }
        if (!isset($data['order'])) {
            $data['order'] = Service::max('order') + 1;
        }
        
        Service::create($data);
        return redirect()->route('admin.services.index')
            ->with('success', 'Service créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact($service));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact($service));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        if ($data->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $path = $data->file('image')->store('service', 'public');
            $data['image'] = $path;

            // if(!isset($data['order']))
            // {
            //     $data['order'] = Service::max('order') + 1;
            // }
        }
        $service->update($data);
        return redirect()->route('admin.services.index')
                        ->with('succes', 'Service mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if($service->image) 
        {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
        return redirect()->route('admin.services.index')
            ->with('succes', 'Service supprimé avec succès.');
    }

    
    public function updateOrder(Request $request)
    {
        $services = $request->input('services', []);
        foreach ($services as $id => $order) {
            Service::where('id', $id)->update(['order' => $order]);
        }
        return response()->json(['success' => true]);
    }
}
