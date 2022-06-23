<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/new', function () {
    return view('welcome');
});


//Route::get('/new','TestController@controllerMethod');

Route::any('{slug}', function () { 
    //to view the view welcome, whatever we type in URL
    return view('welcome');
});