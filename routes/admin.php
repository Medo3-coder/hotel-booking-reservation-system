<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'middleware' => ['web-cors'],
], function () {

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('show.login')->middleware('guest:admin');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
