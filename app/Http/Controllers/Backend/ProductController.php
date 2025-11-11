<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index () {

        $products = Product::orderByDesc('created_at')->get();
        return view('backend.pages.products.index', compact('products'));
    }

    public function create () {

        return view('backend.pages.products.create');
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

            'slug' => ['required', 'string'],

//            'quote' => ['required', 'array'],
//            'quote.*' => ['nullable', 'string'],

            'university_count' => ['required', 'string'],

            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Product::ALLOWED_FILE_MIMES),
                'max:' . Product::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $validated = $request->validate($rules);

        $model = new Product();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_1 = collect($request->input('content_1'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_2 = collect($request->input('content_2'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));

//        $model->quote = collect($request->input('quote'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->university_count = $request->input('university_count');

        // $model->slug =  $request->input('slug');
        $model->save();

        if ($request->hasFile('image')) {
            $model->addMedia($request->file('image'))->toMediaCollection("image");
        }

        return redirect()->route('admin.products.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $product = Product::findOrFail($id);
        return view('backend.pages.products.edit', compact('product'));
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

//            'quote' => ['required', 'array'],
//            'quote.*' => ['nullable', 'string'],

            'university_count' => ['required', 'string'],

            'slug' => ['required', 'string'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Product::ALLOWED_FILE_MIMES)],
        ];

        $validated = $request->validate($rules);

        $model = Product::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_1 = collect($request->input('content_1'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content_2 = collect($request->input('content_2'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
//        $model->quote = collect($request->input('quote'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->university_count = $request->input('university_count');

        // $model->slug =  $request->input('slug');
        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('image')->first();
            if ($oldImage) {
                $oldImage->delete();
            }
            $model->addMedia($request->file('image'))->toMediaCollection("image");
        }

        return redirect()->route('admin.products.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Product::findOrFail($id);
        $model->clearMediaCollection('image');
        $model->delete();

        return redirect()->route('admin.products.index')->with(['success' => 'Silindi']);
    }
}
