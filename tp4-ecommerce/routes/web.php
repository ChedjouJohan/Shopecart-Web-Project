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

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');;
});

Route::get('/Blog.html', function () {
    return view('blog');;
});

Route::get('/articles/article1.html', function () {
    return view('articles.article1');
});

Route::get('/articles/article2.html', function () {
    return view('articles.article2');
});
Route::get('/articles/article3.html', function () {
    return view('articles.article3');
});
Route::get('/articles/article4.html', function () {
    return view('articles.article4');
});
Route::get('/articles/article5.html', function () {
    return view('articles.article5');
});
Route::get('/articles/article6.html', function () {
    return view('articles.article6');
});
