<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraSetting extends Model
{
    protected $fillable = [
        'key',
        'label',
        'value',
        'icon_class',
        'value_suffix',
        'order',
    ];
}
