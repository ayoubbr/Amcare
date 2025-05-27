<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'image',
        'whatsapp_number',
        'order',
        'is_published'
    ];


    protected $casts = [
        'is_published' => 'boolean',
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function zones()
    {
        return $this->belongsToMany(Zone::class);
    }

    public static function createUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = Service::where('slug', $slug)->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
