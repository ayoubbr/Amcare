<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'event_date' => 'dateTime'
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }


    public function upComming($query)
    {
        return $query->where('event_date', '>=', now())
                ->orderBy('event_date', 'asc');
    }

    public function past($query)
    {
        return $query->where('event_date', '<', now())
                ->orderBy('event_date', 'desc');
    }









}
