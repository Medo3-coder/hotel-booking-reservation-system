<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Auth\LoginRequest;
use App\Http\Requests\Site\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthControlller extends Controller {
    public function showLogin() {
        return view('site.auth.login');
    }

    public function Login(LoginRequest $request) {

        $attemptData = ['email' => $request->email, 'password' => $request->password];
        $user        = auth()->guard('web')->attempt($attemptData);
        if ($user) {
            $user = auth('web')->user();
            if ($user->is_blocked == 1) {
                Auth::logout();
                return response()->json(['status' => 'blocked', 'message' => __('site.blocked')]);
            }

            return response()->json(['status' => 'success', 'url' => route('home'), 'message' => __('site.logined')]);
        }
        return response()->json(['status' => 'fail', 'message' => __('site.invalid_data')]);
    }

    public function showRegister() {
        return view('site.auth.register');
    }

    public function Register(RegisterRequest $request) {

        $user = User::create($request->validated());
        return response()->json(['status' => 'success', 'url' => route('showLogin'), 'message' => __('site.user_created')]);

    }

    public function logout() {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('home');
    }
}
