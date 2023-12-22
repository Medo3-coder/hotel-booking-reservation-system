<?php

use App\Http\Controllers\Site\AuthControlller;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


// Auth
Route::get('login' , [AuthControlller::class , 'showLogin'])->name('showLogin');
Route::get('register' , [AuthControlller::class , 'showRegister'])->name('showRegister');
Route::post('site-login' , [AuthControlller::class , 'Login'])->name('siteLogin');
Route::post('site-register' , [AuthControlller::class , 'Register'])->name('siteRegister');



