<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'photo',
        'bio',
        'social_links',
        'order',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'social_links' => 'array',
    ];

    public function published($query)
    {
        return $query->where('is_published', true);
    }

    public function order($query)
    {
        return $query->orderBy('order', 'asc');
    }




}
