<?php

namespace App\Http\Controllers\admin;
use app\Http\Requests\signinRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signinController extends Controller
{
    public function index()
    {
        return view('admin.auth.signin');
    }
   
}
