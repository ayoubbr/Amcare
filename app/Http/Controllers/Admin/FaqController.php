<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('admin.faqs.index', compact('faqs')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'FAQ ajoutée avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'FAQ mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'FAQ supprimée avec succès.');
    }
}

