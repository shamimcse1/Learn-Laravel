<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{name}/{age}/{gpa}','App\Http\Controllers\MyController@MyName');

Route::group(['prefix'=>'account'],function(){

    Route::get('/profile',function(){

        return "Profile";
    });
    Route::get('/login',function(){

        return "Login";
    });
    Route::get('/Update',function(){

        return "Update Profile";
    });
    
});
