<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index');

Route::get('/list','ProductController@showList')->name('product.list');
Route::post('/list/{id}', 'ProductController@delete');

Route::get('/add','ProductController@showAddForm');
Route::post('/add/confirm','ProductController@addConfirm')->name('product.add.confirm');
Route::post('/add','ProductController@addNewProduct')->name('product.add.new');

Route::get('/contact','contactController@showContact')->name('contact.form');
Route::post('/contact/confirm', 'contactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'contactController@send')->name('contact.send');
