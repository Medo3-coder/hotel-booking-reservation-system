<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class AuthController extends Controller {

    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(loginRequest $request) {

        if ($this->chackTooManyFailedAttempts()) {
            return $this->chackTooManyFailedAttempts();
        }

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'is_blocked' => 0], $remember_me)) {
            RateLimiter::clear($this->throttleKey());

            return response()->json(['status' => 'login', 'url' => route('admin.dashboard'), 'message' => 'admin.login successfully logged']);
        } else {
            if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
                auth('admin')->logout();
                return response()->json(['status' => 0, 'message' => 'admin has been blocked']);
            }
            RateLimiter::hit($this->throttleKey(), $seconds = 3600);
            return response()->json(['status' => 0, 'message' => __('incorrect password')]);

        }

    }

    public function logout() {
        auth('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect(route('admin.login'));

    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */

    public function throttleKey() {
        return Str::lower(request('email')) . '|' . request()->ip();
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     */
    public function chackTooManyFailedAttempts() {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 15)) {
            return;
        }
        return response()->json(['status' => 0, 'message' => 'IP address banned. Too many login attempts, try after 30 minute']);
    }
}
