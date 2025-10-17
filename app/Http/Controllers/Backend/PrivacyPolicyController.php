<?php

namespace App\Http\Controllers\Backend;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController
{
    public function edit()
    {
        $privacy = PrivacyPolicy::query()->first() ?? new PrivacyPolicy();
        return view('backend.pages.privacy-policy.form', compact('privacy'));
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => ['required', 'array'],
            'title.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'title.*' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.' . config('app.default_locale') => ['required', 'string', 'max:255'],
            'description.*' => ['nullable', 'string', 'max:255'],
        ];

        $validated = $request->validate($rules);

        $privacy = PrivacyPolicy::query()->first() ?? new PrivacyPolicy();
        $privacy->fill($validated);
        $privacy->save();

        return redirect()->back()->with('success', 'Privacy updated successfully!');
    }
}
