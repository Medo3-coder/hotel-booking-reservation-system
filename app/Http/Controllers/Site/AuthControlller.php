<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Auth\RegisterRequest;
use App\Models\User;

class AuthControlller extends Controller {
    public function showLogin() {
        return view('site.auth.login');
    }

    public function Login() {

    }

    public function showRegister() {
        return view('site.auth.register');
    }

    public function Register(RegisterRequest $request) {
        
        $user = User::create($request->validated());
        return response()->json(['status' => 'success', 'url' => route('showLogin'), 'message' => __('site.user_created')]);

    }
}
