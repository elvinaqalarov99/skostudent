<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutHistory;
use Illuminate\Http\Request;

class AboutHistoryController extends Controller
{
    public function index()
    {
        $histories = AboutHistory::query()->orderByDesc('year')->get();
        return view('backend.pages.about.histories.index', compact('histories'));
    }

    public function create()
    {
        return view('backend.pages.about.histories.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'description.*' => ['nullable', 'string', 'max:255'],
            'year' => ['required', 'integer', 'min:1900'],
        ]);

        AboutHistory::create($validated);

        return redirect()->route('admin.about.histories.index')->with('success', 'History added.');
    }

    public function edit(AboutHistory $history)
    {
        return view('backend.pages.about.histories.form', compact('history'));
    }

    public function update(Request $request, AboutHistory $history)
    {
        $validated = $request->validate([
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'description.*' => ['nullable', 'string', 'max:255'],
            'year' => ['required', 'integer', 'min:1900'],
        ]);

        $history->update($validated);

        if ($request->hasFile('image')) {
            $history->clearMediaCollection('file');
            $history->addMedia($request->file('image'))->toMediaCollection('file');
        }

        return redirect()->route('admin.about.histories.index')->with('success', 'History updated.');
    }

    public function delete(AboutHistory $history)
    {
        $history->delete();
        return redirect()->route('admin.about.histories.index')->with('success', 'Deleted.');
    }
}
