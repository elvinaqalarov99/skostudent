<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index () {

        $services = Service::orderBy('created_at')->get();
        return view('backend.pages.services.index', compact('services'));
    }

    public function create () {

        return view('backend.pages.services.create');
    }

    public function store (Request $request) {

        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'content_1' => ['required', 'array'],
            'content_1.' . config('app.default_locale') => ['required'],
            'content_1.*' => ['nullable', 'string'],

            'content_2' => ['required', 'array'],
            'content_2.*' => ['nullable', 'string'],

            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required'],
            'description.*' => ['nullable', 'string'],

            'slug' => ['required', 'string'],
            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Service::ALLOWED_FILE_MIMES),
                'max:' . Service::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Service();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_1 = collect($request->input('content_1'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_2 = collect($request->input('content_2'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->description = collect($request->input('description'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        // $model->slug =  $request->input('slug');
        $model->save();

        $model->addMedia($request->image)->toMediaCollection("file");

        return redirect()->route('admin.services.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $service = Service::findOrFail($id);
        return view('backend.pages.services.edit', compact('service'));
    }

    public function update (Request $request, $id) {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'content_1' => ['required', 'array'],
            'content_1.' . config('app.default_locale') => ['required'],
            'content_1.*' => ['nullable', 'string'],

            'content_2' => ['required', 'array'],
            'content_2.*' => ['nullable', 'string'],

            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required'],
            'description.*' => ['nullable', 'string'],

            'slug' => ['required', 'string'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Service::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Service::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_1 = collect($request->input('content_1'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_2 = collect($request->input('content_2'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->description = collect($request->input('description'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        // $model->slug =  $request->input('slug');
        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('file')->first();
            if ($oldImage) {
                $oldImage->delete();
            }

            $model->addMedia($request->image)->toMediaCollection("file");
        }

        return redirect()->route('admin.services.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Service::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.services.index')->with(['success' => 'Silindi']);
    }
}
