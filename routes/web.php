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
