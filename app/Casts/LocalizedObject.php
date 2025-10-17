<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class LocalizedObject implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes): object
    {
        // Decode JSON as object
        $decoded = json_decode($value);

        // If null or invalid, create empty object
        if (!is_object($decoded)) {
            $decoded = new \stdClass();
        }

        // Ensure all locales exist
        foreach (config('app.locales') as $locale) {
            if (!property_exists($decoded, $locale)) {
                $decoded->$locale = '';
            }
        }

        return $decoded;
    }

    public function set($model, string $key, $value, array $attributes): string
    {
        // If null, create empty object
        if (is_null($value)) {
            $value = new \stdClass();
        }

        // Convert array to object if necessary
        if (is_array($value)) {
            $value = (object) $value;
        }

        // Ensure all locales exist
        foreach (config('app.locales') as $locale) {
            if (!property_exists($value, $locale)) {
                $value->$locale = '';
            }
        }

        return json_encode($value);
    }
}
