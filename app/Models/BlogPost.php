<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    /** @use HasFactory<\Database\Factories\BlogPostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
        'is_published',
        'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public static function createUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = BlogPost::where('slug', $slug)->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
