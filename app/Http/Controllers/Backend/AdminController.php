<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function profile () {
        return view('backend.pages.profile');
    }

    public function save (Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:admins,email,' . auth('admins')->user()->id,
            'password' => 'nullable|sometimes|min:6',
            'name' => 'string|required',
        ]);

        $admin = auth('admins')->user();

        $admin->name = $request->name;
        $admin->email = $request->email;

        if (!empty($request->password)) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->back()->with(['success' => 'Yenilendi']);
    }

    public function index () {

        $managers = Admin::orderByDesc('created_at')->get();
        return view('backend.pages.admins.index', compact('managers'));
    }

    public function create () {
        return view('backend.pages.admins.create');
    }

    public function store (Request $request) {

        $rules = [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:admins,email'],
            'password' => ['required', 'string', 'min: 6'],
        ];

        $request->validate($rules);

        $model = new Admin();

        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->password = Hash::make($request->input('password'));

        $model->save();

        return redirect()->route('admin.admins.index')->with(['success' => 'Kaydedildi']);
    }

    public function edit ($id) {

        $manager = Admin::findOrFail($id);
        return view('backend.pages.admins.edit', compact('manager'));
    }

    public function update (Request $request, $id) {

        $rules = [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:admins,email,' . $id],
            'password' => ['sometimes', 'nullable', 'string', 'min: 6'],
        ];

        $request->validate($rules);

        $model = Admin::findOrFail($id);

        $model->name = $request->input('name');
        $model->email = $request->input('email');

        if ($request->password) {
            $model->password = Hash::make($request->input('password'));
        }

        $model->save();

        return redirect()->route('admin.admins.index')->with(['success' => 'Yenilendi']);
    }

    public function delete ($id) {

        $model = Admin::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.admins.index')->with(['success' => 'Silindi']);
    }
}
