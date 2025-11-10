<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderByDesc('created_at')->get();
        return view('backend.pages.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('backend.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'position' => ['nullable', 'array'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Testimonial::ALLOWED_FILE_MIMES),
                'max:' . Testimonial::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Testimonial();

        $model->name = collect($request->input('name'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->position = collect($request->input('position', []))->map(fn ($value) => $value ? preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value) : null);
        $model->save();

        $model->addMedia($request->image)->toMediaCollection("file");

        return redirect()->route('admin.testimonials.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.pages.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'position' => ['nullable', 'array'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Testimonial::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Testimonial::findOrFail($id);

        $model->name = collect($request->input('name'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->position = collect($request->input('position', []))->map(fn ($value) => $value ? preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value) : null);
        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('file')->first();
            if ($oldImage) {
                $oldImage->delete();
            }

            $model->addMedia($request->image)->toMediaCollection("file");
        }

        return redirect()->route('admin.testimonials.index')->with(['success' => 'Yenilendi']);
    }

    public function delete($id)
    {
        $model = Testimonial::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.testimonials.index')->with(['success' => 'Silindi']);
    }
}

