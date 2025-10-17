<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeatureController extends Controller
{
    public function index () {

        $features = Feature::orderByDesc('created_at')->get();
        return view('backend.pages.features.index', compact('features'));
    }

    public function create () {

        return view('backend.pages.features.create');
    }

    public function store (Request $request) {
        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'link' => ['required', 'string', 'url'],
            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Feature::ALLOWED_FILE_MIMES),
                'max:' . Feature::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Feature();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->link = $request->input('link');
        $model->save();

        $model->addMedia($request->image)->toMediaCollection("file");

        return redirect()->route('admin.features.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $feature = Feature::findOrFail($id);
        return view('backend.pages.features.edit', compact('feature'));
    }

    public function update (Request $request, $id) {
        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'link' => ['required', 'string', 'url'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Feature::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Feature::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->link = $request->input('link');

        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('file')->first();
            if ($oldImage) {
                $oldImage->delete();
            }

            $model->addMedia($request->image)->toMediaCollection("file");
        }

        return redirect()->route('admin.features.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Feature::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.features.index')->with(['success' => 'Silindi']);
    }
}
