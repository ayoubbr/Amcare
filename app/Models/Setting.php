<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;



    protected $fillable = [
        'site_name',
        'phones',
        'email',
        'logo',
        'footer_text'
    ];

    protected $casts = [
        'phones' => 'array',
    ];


    public static function getAllSettings()
    {
        return self::first()->toArray();
    }

    public static function getSetting($key)
    {
        $setting = self::first();
        return $setting ? $setting->$key : null;
    }
}
