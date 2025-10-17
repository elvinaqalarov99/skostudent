<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ScholarshipController extends Controller
{
    public function index()
    {
        $scholarships = Scholarship::orderByDesc('created_at')->get();
        return view('backend.pages.scholarships.index', compact('scholarships'));
    }

    public function create()
    {
        return view('backend.pages.scholarships.form');
    }

    public function store(Request $request)
    {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],

            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string'],
            'description.*' => ['nullable', 'string'],

            'tuition' => ['required', 'array'],
            'tuition.' . config('app.default_locale') => ['required', 'string'],
            'tuition.*' => ['nullable', 'string'],

            'university' => ['required', 'array'],
            'university.' . config('app.default_locale') => ['required', 'string'],
            'university.*' => ['nullable', 'string'],

            'slug' => ['required', 'string'],

            'deadline' => ['required', 'date'],

            'images' => ['required', 'array', 'min:1'],
            'images.*' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Scholarship::ALLOWED_FILE_MIMES),
                'max:' . Scholarship::ALLOWED_FILE_SIZE_KB,
            ],
        ];

        $validated = $request->validate($rules);

        $scholarship = new Scholarship();
        $scholarship->title = collect($validated['title'])->map(fn($v) => strip_tags($v));
        $scholarship->description = collect($validated['description'])->map(fn($v) => strip_tags($v));
        $scholarship->tuition = collect($validated['tuition'])->map(fn($v) => strip_tags($v));
        $scholarship->university = collect($validated['university'])->map(fn($v) => strip_tags($v));
        $scholarship->slug = $validated['slug'];
        $scholarship->deadline = $validated['deadline'];

        $scholarship->save();

        foreach ($validated['images'] as $image) {
            $scholarship->addMedia($image)->toMediaCollection('images');
        }

        return redirect()->route('admin.scholarships.index')->with('success', 'Kaydedildi');
    }

    public function edit($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        return view('backend.pages.scholarships.form', compact('scholarship'));
    }

    public function update(Request $request, $id)
    {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],

            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string'],
            'description.*' => ['nullable', 'string'],

            'tuition' => ['required', 'array'],
            'tuition.' . config('app.default_locale') => ['required', 'string'],
            'tuition.*' => ['nullable', 'string'],

            'university' => ['required', 'array'],
            'university.' . config('app.default_locale') => ['required', 'string'],
            'university.*' => ['nullable', 'string'],

            'slug' => ['required', 'string'],

            'deadline' => ['required', 'date'],

            'images' => ['sometimes', 'array'],
            'images.*' => ['file', 'sometimes', 'mimetypes:' . implode(',', Scholarship::ALLOWED_FILE_MIMES)],
        ];

        $validated = $request->validate($rules);

        $scholarship = Scholarship::findOrFail($id);
        $scholarship->title = collect($validated['title'])->map(fn($v) => strip_tags($v));
        $scholarship->description = collect($validated['description'])->map(fn($v) => strip_tags($v));
        $scholarship->tuition = collect($validated['tuition'])->map(fn($v) => strip_tags($v));
        $scholarship->university = collect($validated['university'])->map(fn($v) => strip_tags($v));
        $scholarship->slug = $validated['slug'];
        $scholarship->deadline = $validated['deadline'];

        $scholarship->save();

        if (!empty($validated['images'])) {
            $scholarship->clearMediaCollection('images');
            foreach ($validated['images'] as $image) {
                $scholarship->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.scholarships.index')->with('success', 'Yenilendi');
    }

    public function delete($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->clearMediaCollection('images');
        $scholarship->delete();

        return redirect()->route('admin.scholarships.index')->with('success', 'Silindi');
    }
}
