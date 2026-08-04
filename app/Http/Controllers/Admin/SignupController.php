<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\Admin;

class SignupController extends Controller {
    public function index() {
        return view('admin.auth.signup');
    }
    public function store(SignupRequest $request) {
        $validatedData = $request->validated();
        $profileImage = null;
        if ($request->hasFile('profile_picture')) {
            $profileImage = $request->file('profile_picture')->store('images', 'public');
        }
        Admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact_number' => $validatedData['contact_number'],
            'profile_picture' => $profileImage,
            'password' => bcrypt($validatedData['password']),
            'status' => 1,
            'email_verified_at' => now(),
        ]);
        return redirect()->route('admin.signin')->with('success', 'Admin registered successfully.');
    }
}
