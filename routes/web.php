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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        'name' => "Afiq Harith",
        'email' => "afiqharith@gmail.com",
        'image' => "pasport image.jpg", 
    ]);
});

Route::get('/post', function () {
    return view('post');
});
