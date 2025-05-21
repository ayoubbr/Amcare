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
        'meta_title',
        'description',
        'image',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }


    public static function createUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = self::where('slug', $slug)->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
    
}
