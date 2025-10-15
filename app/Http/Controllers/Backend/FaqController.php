<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    public function index () {
        $faqs = Faq::orderBy('created_at')->get();
        return view('backend.pages.faqs.index', compact('faqs'));
    }

    public function create () {

        return view('backend.pages.faqs.create');
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
        ];

        $request->validate($rules);

        $model = new Faq();

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->save();

        return redirect()->route('admin.faqs.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $faq = Faq::findOrFail($id);
        return view('backend.pages.faqs.edit', compact('faq'));
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
        ];

        $request->validate($rules);

        $model = Faq::findOrFail($id);

        $model->title = collect($request->input('title'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->content = collect($request->input('content'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->save();

        return redirect()->route('admin.faqs.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Faq::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.faqs.index')->with(['success' => 'Silindi']);
    }
}
