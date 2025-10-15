<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login () {
        return view('backend.auth.login');
    }

    public function auth (Request $request) {

        $this->validate($request, [
            'email' => 'required|email|exists:admins',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admins')->attempt($credentials, request()->has('rememberme'))) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withInput()->withErrors(['error' => 'Incorrect entry']);
        }
    }

    public function logout () {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
