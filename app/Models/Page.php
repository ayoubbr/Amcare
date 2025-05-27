<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'content',
        'main_title',
        'meta_title',
        'meta_description', 
        'description',
        'image',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'description' => 'array',
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }


    public static function createUniqueSlug($title, $id = 0)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;
        while (static::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        return $slug;
    }

    public function preview(Page $page)
    {
        return view('front.page', compact('page'));
    }


    public function togglePublish(Page $page)
    {
        $page->is_published = !$page->is_published;
        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', $page->is_published ? 'Page publiée avec succès.' : 'Page dépubliée avec succès.');
    }
}
