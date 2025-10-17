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

    public function create()
    {
        return view('backend.pages.teams.form');
    }

    public function store(Request $request)
    {
        $rules = [
            'position' => ['required', 'array'],
            'position.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'linkedin' => ['required', 'string', 'max:255', 'regex:/^https:\/\/(www\.)?linkedin\.com(\/.*)?$/i'],
            'image' => [
                'required',
                'file',
                'mimetypes:' . implode(',', Team::ALLOWED_FILE_MIMES),
                'max:' . Team::ALLOWED_FILE_SIZE_KB,
            ],
        ];

        $validated = $request->validate($rules);

        $team = new Team();
        $team->name = collect($validated['name'])->map(fn ($v) => strip_tags($v));
        $team->position = collect($validated['position'])->map(fn ($v) => strip_tags($v));
        $team->linkedin = $validated['linkedin'];
        $team->save();

        $team->addMedia($request->file('image'))->toMediaCollection('file');

        return redirect()->route('admin.teams.index')->with('success', 'Kaydedildi');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.pages.teams.form', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'position' => ['required', 'array'],
            'position.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'position.*' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'array'],
            'name.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'linkedin' => ['required', 'string', 'max:255', 'regex:/^https:\/\/(www\.)?linkedin\.com(\/.*)?$/i'],
            'image' => ['sometimes', 'file', 'mimetypes:' . implode(',', Team::ALLOWED_FILE_MIMES)],
        ];

        $validated = $request->validate($rules);

        $team = Team::findOrFail($id);
        $team->name = collect($validated['name'])->map(fn ($v) => strip_tags($v));
        $team->position = collect($validated['position'])->map(fn ($v) => strip_tags($v));
        $team->linkedin = $validated['linkedin'];
        $team->save();

        if ($request->hasFile('image')) {
            $team->clearMediaCollection('file');
            $team->addMedia($request->file('image'))->toMediaCollection('file');
        }

        return redirect()->route('admin.teams.index')->with('success', 'Yenilendi');
    }

    public function delete ($id) {

        $model = Team::findOrFail($id);
        $model->clearMediaCollection('file');
        $model->delete();

        return redirect()->route('admin.teams.index')->with(['success' => 'Silindi']);
    }
}
