<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index () {

        $portfolios = Portfolio::orderBy('created_at')->with('type')->get();
        return view('backend.pages.portfolios.index', compact('portfolios'));
    }

    public function create () {

        return view('backend.pages.portfolios.create');
    }

    public function store (Request $request) {

        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'portfolio_type' => ['required', 'exists:portfolio_types,id'],
            'slug' => ['required', 'string'],
            'images' => ['required', 'array', 'min:1'],
            'images.*' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Portfolio::ALLOWED_FILE_MIMES),
                'max:' . Portfolio::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Portfolio();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->portfolio_type_id =  $request->input('portfolio_type');
        // $model->slug =  $request->input('slug');
        $model->save();

        foreach ($request->images as $image) {
            $model->addMedia($image)->toMediaCollection("images");
        }

        return redirect()->route('admin.portfolios.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $portfolio = Portfolio::findOrFail($id);
        return view('backend.pages.portfolios.edit', compact('portfolio'));
    }

    public function update (Request $request, $id) {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'array'],
            'content.' . config('app.default_locale') => ['required', 'string'],
            'content.*' => ['nullable', 'string'],
            'portfolio_type' => ['required', 'exists:portfolio_types,id'],
            'slug' => ['required', 'string'],
            'images' => ['sometimes', 'array'],
            'images.*' => ['file', 'sometimes', 'mimetypes:' . implode(',', Portfolio::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Portfolio::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        // $model->slug =  $request->input('slug');
        $model->portfolio_type_id =  $request->input('portfolio_type');
        $model->save();

        foreach ($request->images ?? [] as $image) {
            $model->addMedia($image)->toMediaCollection("images");
        }

        return redirect()->route('admin.portfolios.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Portfolio::findOrFail($id);
        $model->clearMediaCollection('images');
        $model->delete();

        return redirect()->route('admin.portfolios.index')->with(['success' => 'Silindi']);
    }
}
