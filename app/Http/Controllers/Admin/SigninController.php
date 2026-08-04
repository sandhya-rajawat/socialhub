<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SigninRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SigninController extends Controller {
    public function index() {
        return view('admin.auth.signin');
    }

    public function  store(SigninRequest $request) {
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }
    }
}
