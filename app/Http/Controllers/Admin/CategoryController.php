<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view('admin.categories', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $validate = $request->validated();

        $validate['slug'] = Str::slug($validate['name']);

        Category::create($validate);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validate = $request->validated();

        if ($category->name !== $validate['name']) {
            $validate['slug'] = Str::slug($validate['name']);
        }

        $category->update($validate);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category mis à jour avec succès .');
    }

    public function destroy(Category $category)
    {
        if ($category->posts()->count() > 0) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Il y a des articles associés avec cette category!');
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category bien supprimée .');
    }
}
