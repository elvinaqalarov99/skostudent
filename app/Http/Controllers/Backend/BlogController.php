<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index () {

        $blogs = Blog::orderBy('created_at')->get();
        return view('backend.pages.blogs.index', compact('blogs'));
    }

    public function create () {

        return view('backend.pages.blogs.create');
    }

    public function store (Request $request) {

        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string', 'max:500'],
            'description.*' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'slug' => ['required', 'string'],
            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Blog::ALLOWED_FILE_MIMES),
                'max:' . Blog::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Blog();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->description = collect($request->input('description'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->slug =  $request->input('slug');
        $model->save();

        $model->addMedia($request->image)->toMediaCollection("file");

        return redirect()->route('admin.blogs.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $blog = Blog::findOrFail($id);
        return view('backend.pages.blogs.edit', compact('blog'));
    }

    public function update (Request $request, $id) {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string', 'max:500'],
            'description.*' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'slug' => ['required', 'string'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Blog::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Blog::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->description = collect($request->input('description'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->slug =  $request->input('slug');
        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('file')->first();
            if ($oldImage) {
                $oldImage->delete();
            }

            $model->addMedia($request->image)->toMediaCollection("file");
        }

        return redirect()->route('admin.blogs.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Blog::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.blogs.index')->with(['success' => 'Silindi']);
    }
}
