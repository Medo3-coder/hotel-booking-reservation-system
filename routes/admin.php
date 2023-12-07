<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.' , 'namespace' => 'Admin', 'middleware' => ['web-cors']], function () {
    // Route::get('dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');


    Route::get('login', [AuthController::class, 'showLoginForm'])->name('show.login')->middleware('guest:admin');
    Route::post('login', [AuthController::class, 'login'])->name('login');


    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');


    });

});
