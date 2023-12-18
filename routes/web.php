<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PostsController;
use App\Models\Post;

Route::get('/', function () {
    return view('posts', ['posts' => Post::all()]);
});

// Route for showing a single post
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('single-post', ['post' => $post]);
});


