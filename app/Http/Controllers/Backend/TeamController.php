<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index () {

        $teams = Team::orderBy('created_at')->get();
        return view('backend.pages.teams.index', compact('teams'));
    }

    public function create () {

        return view('backend.pages.teams.create');
    }

    public function store (Request $request) {
        $rules = [
            'position' => ['required', 'array'],
            'position.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'image' => [
                'file',
                'required',
                'mimetypes:' . implode(',', Team::ALLOWED_FILE_MIMES),
                'max:' . Team::ALLOWED_FILE_SIZE_KB
            ],
        ];

        $request->validate($rules);

        $model = new Team();

        $model->name = collect($request->input('name'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->position = collect($request->input('position'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->save();

        $model->addMedia($request->image)->toMediaCollection("file");

        return redirect()->route('admin.teams.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $team = Team::findOrFail($id);
        return view('backend.pages.teams.edit', compact('team'));
    }

    public function update (Request $request, $id) {
        $rules = [
            'position' => ['required', 'array'],
            'position.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'image' => ['file', 'sometimes', 'mimetypes:' . implode(',', Team::ALLOWED_FILE_MIMES)],
        ];

        $request->validate($rules);

        $model = Team::findOrFail($id);

        $model->name = collect($request->input('name'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->position = collect($request->input('position'))->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
        $model->save();

        if ($request->hasFile('image')) {
            $oldImage = $model->getMedia('file')->first();
            if ($oldImage) {
                $oldImage->delete();
            }

            $model->addMedia($request->image)->toMediaCollection("file");
        }

        return redirect()->route('admin.teams.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Team::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.teams.index')->with(['success' => 'Silindi']);
    }
}
