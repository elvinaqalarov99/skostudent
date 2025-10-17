<?php

namespace App\Http\Controllers\Backend;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController
{
    public function edit()
    {
        $about = AboutUs::query()->first() ?? new AboutUs();
        return view('backend.pages.about.form', compact('about'));
    }

    public function update(Request $request)
    {
        $rules = [
            'short_info' => ['required', 'array'],
            'short_info.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'short_info.*' => ['nullable', 'string', 'max:255'],
            'values' => ['required', 'array'],
            'values.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'values.*' => ['nullable', 'string', 'max:255'],
            'mission' => ['required', 'array'],
            'mission.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'mission.*' => ['nullable', 'string', 'max:255'],
            'vision' => ['required', 'array'],
            'vision.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'vision.*' => ['nullable', 'string', 'max:255'],
            'country_count' => ['required', 'integer', 'min:0'],
            'student_count' => ['required', 'integer', 'min:0'],
            'scholarship_count' => ['required', 'integer', 'min:0'],
            'university_count' => ['required', 'integer', 'min:0'],
            'images.*' => ['sometimes', 'file', 'mimetypes:' . implode(',', AboutUs::ALLOWED_FILE_MIMES), 'max:' . AboutUs::ALLOWED_FILE_SIZE_KB],
        ];

        $validated = $request->validate($rules);

        $about = AboutUs::query()->first() ?? new AboutUs();
        $about->fill(collect($validated)->except(['images'])->toArray());
        $about->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $about->addMedia($image)->toMediaCollection('file');
            }
        }

        return redirect()->back()->with('success', 'About page updated successfully!');
    }
}
