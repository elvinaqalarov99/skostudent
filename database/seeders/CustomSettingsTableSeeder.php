<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class CustomSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentKeys = Setting::pluck('key');

        foreach (config('settings') as $key => $type) {
            if ($currentKeys->contains($key)) {
                continue;
            }
            Setting::create([
                'type' => $type,
                'key' => $key,
                'value' => $key
            ]);
        }
    }
}
