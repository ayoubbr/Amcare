<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'icon',
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

}
