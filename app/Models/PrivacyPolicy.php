<?php

namespace App\Models;

use App\Casts\LocalizedObject;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PrivacyPolicy extends Model
{
    protected $table = 'privacy_policy';

    protected $guarded = false;

    protected $casts = [
        'title' => LocalizedObject::class,
        'description' => LocalizedObject::class,
    ];
}
