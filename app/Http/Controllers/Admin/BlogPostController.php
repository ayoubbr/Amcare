<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;  

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
        
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogPostRequest $request)
    {
        $validate = $request->validated();
        $validate['slug'] = BlogPost::createUniqueSlug($validate['title']);

        if ($validate->hasFile('image')) {
            $path = $validate->file('image')->store('blog', 'public');
            $validate['image'] = $path;
        }

        if (!isset($validate['published_at']) && isset($validate['is_published']) && $validate['is_published']) {
            $validate['published_at'] = now();
        }

        BlogPost::create($validate);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Article créé avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogPostRequest $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
