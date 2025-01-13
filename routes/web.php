<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.index');
});

//Dashboard Routes
Route::group(['prefix' => '/dashboard'], function(){
    Route::get('/', function(){
        return view('dashboard.index');
    });
    Route::get('/news/comments',function (){
       return view('dashboard.Comments');
    });
    Route::get('/news/category',function (){
        return view('dashboard.catsNews');
    });
    Route::get('/news/create',function (){
        return view('dashboard.createNews');
    });
});
