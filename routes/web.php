<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', [
        'title' => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Afiq Harith",
        'email' => "afiqharith@gmail.com",
        'image' => "pasport image.jpg",
    ]);
});



Route::get('/posts', [postController::class, 'index']);

//single page
Route::get('posts/{slug}', [PostController::class, 'show']);