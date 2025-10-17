<?php

namespace App\Models;

use App\Casts\LocalizedObject;
use Illuminate\Database\Eloquent\Model;

class AboutHistory extends Model
{
    protected $guarded = false;

    protected $casts = [
        'title' => LocalizedObject::class,
        'description' => LocalizedObject::class,
    ];
}
