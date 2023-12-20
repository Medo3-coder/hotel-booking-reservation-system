<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthControlller extends Controller
{
    public function login()
    {
       return view('site.auth.login');
    }

    public function register()
    {
       return view('site.auth.register');
    }
}
