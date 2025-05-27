<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'content',
        'event_date',
        'location',
        'image',
        'is_published'
    ];


    protected $casts = [
        'is_published' => 'boolean',
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }


    public function scopeUpComming($query)
    {
        return $query->where('event_date', '>=', now())
                ->orderBy('event_date', 'asc');
    }

    public function scopePast($query)
    {
        return $query->where('event_date', '<', now())
                ->orderBy('event_date', 'desc');
    }

    public static function createUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = self::where('slug', $slug)->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }









}
