<?php

use App\Models\Setting;
use App\Models\Faq;
use App\Models\Blog;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('localized')) {
    function localized(object|string|null $data, bool $decode = false): string
    {
        if (!$data) {
            return '';
        }
        if($decode) {
            $data = json_decode($data);
        }

        $locale = app()->getLocale();

        return $data?->$locale ?? "";
    }
}

if (!function_exists('setting')) {
    function setting(string $key): string
    {
        $setting = Cache::rememberForever('settings', function () {
            return Setting::latest()->get();
        })->where('key', $key)->first();

        if (!$setting) {
            return $key;
        }

        return match ($setting->type) {
            Setting::TYPES['string'] => localized($setting->value),
            Setting::TYPES['text'] => localized($setting->value),
            Setting::TYPES['editor'] => localized($setting->value),
            Setting::TYPES['file'] => $setting->getFirstMedia('image')?->getUrl() ?? '',
            default => ""
        };
    }
}
