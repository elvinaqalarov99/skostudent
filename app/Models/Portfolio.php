<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Casts\LocalizedObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Portfolio extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasSlug;

    protected $with = [
        'media'
    ];

    protected $casts = [
        'title' => LocalizedObject::class,
        'content' => LocalizedObject::class,
    ];

    public const ALLOWED_FILE_SIZE_KB = 10 * 1024;

    public const ALLOWED_FILE_MIMES = [
        // taken from https://www.freeformatter.com/mime-types-list.html
        'image/jpeg', 'image/x-citrix-jpeg', // jpeg, jpg
        'image/png', 'image/x-citrix-png', 'image/x-png', // png
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaCollection('images')
            ->acceptsMimeTypes(Setting::ALLOWED_FILE_MIMES)
            ->acceptsFile(fn (File $file) => $file->size <= 10 * 1024 * 1024)
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->nonQueued()
                    ->width(270);
            });
    }

    public function type(): HasOne
    {
        return $this->hasOne(PortfolioType::class, 'id', 'portfolio_type_id');
    }
}
