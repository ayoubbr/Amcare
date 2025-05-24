<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = BlogPost::with('category')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $categories = Category::orderBy('name')->get();

        return view('admin.blog-posts', compact('posts', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogPostRequest $request)
    {

        $validate = $request->validated();
        $validate['slug'] = BlogPost::createUniqueSlug($validate['title']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $validate['image'] = $path;
        }

        if (!isset($request['published_at']) && isset($request['is_published'])) {
            $validate['published_at'] = now();
        }

        BlogPost::create($validate);

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Article créé avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogPostRequest $request)
    {
        $validate = $request->validated();
        $blogPost = BlogPost::find($request['id']);

        if ($blogPost->title !== $validate['title']) {
            $validate['slug'] = BlogPost::createUniqueSlug($validate['title']);
        }


        if ($request->hasFile('image')) {
            if ($blogPost->image) {
                Storage::disk('public')->delete($blogPost->image);
            }

            $path = $request->file('image')->store('blog', 'public');
            $validate['image'] = $path;
        }

        if (!isset($validate['is_published']) || !$validate['is_published']) {
            $validate['published_at'] = null;
        } elseif (isset($validate['is_published']) && $validate['is_published'] && !$blogPost->published_at) {
            $validate['published_at'] = $validate['published_at'] ?? now();
        }

        $blogPost->update($validate);

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $blogPost = BlogPost::find($id);

        if ($blogPost->image) {
            Storage::disk('public')->delete($blogPost->image);
        }

        $blogPost->delete();
        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Article supprimé avec succès.');
    }
    
}
