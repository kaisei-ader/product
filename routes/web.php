<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index');

Route::get('/list','listController@index');
Route::get('/add','addController@index');
Route::get('/contact','contactController@index');
