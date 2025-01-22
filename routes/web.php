<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Routes for the frontend
Route::view('/', 'front.index')->name('home');

//Dashboard Routes
Route::group(['prefix' => '/dashboard'], function(){
    Route::get('/', function(){
        return view('dashboard.index');
    });
    Route::get('/news/comments',function (){
       return view('dashboard.comments');
    });
    Route::get('/news/category',function (){
        return view('dashboard.category');
    });
    Route::get('/news/create',function (){
        return view('dashboard.create-article');
    });
    Route::get('/news/edit',function (){
        return view('dashboard.editNews');
    });
});

//Auth Routes
Route::View('/login', 'auth.login')->name('login');
Route::post('/login',[AuthController::class,'login',]);
Route::View('/register', 'auth.register')->name('register');
Route::post('/register',[AuthController::class,'register',]);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes for auth social login-register
Route::get('auth/{driver}/redirect', [SocialLoginController::class, 'redirect'])->name('auth.redirect');
Route::get('auth/{driver}/callback', [SocialLoginController::class, 'callback'])->name('auth.callback');
