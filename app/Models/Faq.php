<?php

namespace App\Models;

use App\Casts\LocalizedObject;
use Illuminate\Database\Eloquent\Model;
class Faq extends Model
{

    protected $casts = [
        'title' => LocalizedObject::class,
        'content' => LocalizedObject::class,
    ];
}
