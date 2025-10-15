<?php

namespace App\Models;

use App\Casts\LocalizedObject;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $casts = [
        'type' => 'integer',
        'value' => LocalizedObject::class,
    ];

    public const TYPES = [
        'string' => 1,
        'text' => 2,
        'file' => 3,
        'editor' => 4,
//        'url' => 4,
//        'bool' => 5,
    ];

    protected $with = [
        'media'
    ];

    public const ALLOWED_FILE_SIZE_KB = 10 * 1024;

    public const ALLOWED_FILE_MIMES = [
        // taken from https://www.freeformatter.com/mime-types-list.html
        'image/jpeg', 'image/x-citrix-jpeg', // jpeg, jpg
        'image/png', 'image/x-citrix-png', 'image/x-png', // png
        'image/svg+xml', // svg
        'application/pdf', // pdf
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword', // word
        'application/vnd.ms-excel', 'application/vnd.ms-excel.sheet.binary.macroenabled.12', 'application/vnd.ms-excel.sheet.macroenabled.12', // excel (old formats)
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // excel (new xlsx format)
        'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint.presentation.macroenabled.12', // ppt (old formats),
        'application/vnd.openxmlformats-officedocument.presentationml.presentation' // ppt (new pptx format)
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaCollection('image')
            ->acceptsMimeTypes(Setting::ALLOWED_FILE_MIMES)
            ->acceptsFile(fn(File $file) => $file->size <= 5 * 1024 * 1024)
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->nonQueued()
                    ->width(270);
            });
    }
}
