<?php

namespace App\Http\Controllers\admin;

use app\Http\Requests\SigninRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class SigninController extends Controller {
    public function index() {
        return view('admin.auth.signin');
    }

    public function authenticate(SigninRequest $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')
                ->with('success', 'Admin signed in successfully.');
        }

        return back()
            ->withErrors(['email' => 'Email ya password galat hai.'])
            ->onlyInput('email');
    }
}
