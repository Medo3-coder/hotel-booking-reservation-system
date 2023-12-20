<?php

use App\Http\Controllers\Site\AuthControlller;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


// Auth
Route::get('login' , [AuthControlller::class , 'login'])->name('login');
Route::get('register' , [AuthControlller::class , 'register'])->name('register');

