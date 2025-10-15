<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioTypeController extends Controller
{
    public function index () {

        $portfolio_types = PortfolioType::orderBy('created_at')->get();
        return view('backend.pages.portfolio_types.index', compact('portfolio_types'));
    }

    public function create () {

        return view('backend.pages.portfolio_types.create');
    }

    public function store (Request $request) {

        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'slug' => ['required', 'string'],
        ];

        $request->validate($rules);

        $model = new PortfolioType();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->slug =  $request->input('slug');
        $model->save();

        return redirect()->route('admin.portfolio_types.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $portfolio_type = PortfolioType::findOrFail($id);
        return view('backend.pages.portfolio_types.edit', compact('portfolio_type'));
    }

    public function update (Request $request, $id) {
        $request->merge(['slug' => Str::slug($request->input('title.az'))]);

        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'slug' => ['required', 'string'],
        ];

        $request->validate($rules);

        $model = PortfolioType::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->slug =  $request->input('slug');
        $model->save();

        return redirect()->route('admin.portfolio_types.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = PortfolioType::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.portfolio_types.index')->with(['success' => 'Silindi']);
    }
}
