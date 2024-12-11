<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/signin', function () {
    return 'Form Sign In';
});

Route::post('/signin', function () {
    return 'Proses Sign In';
});

Route::get('/signup', function () {
    return 'Form Sign Up';
});

Route::post('/signup', function () {
    return 'Proses Sign Up';
});

Route::get('/profile', function () {
    return "Profile Page";
})->middleware('auth');


/*Route::get('/', function () {
    return 'Home Page';
});*/

Route::get('/blog', function () {
    return 'Daftar Artikel Blog';
});

Route::get('/blog/{slug}', function ($slug) {
    return 'Detail Artikel: ' . $slug;
});

Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'No Title');
    $content = request()->query('content', 'No Content');
    
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::post('/blog/{blogId}', function ($blogId) {
    $title = request()->input('title', 'No Title');
    $content = request()->input('content', 'No Content');
    
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::get('/category/{slug}', function ($slug) {
    return 'Artikel Kategori: ' . $slug;
});

Route::get('/author/{username}', function ($username) {
    return 'Artikel Penulis: ' . $username;
});

Route::get('/privacy-policy', function () {
    return 'Kebijakan Privasi';
});


Route::view('/signin', 'signin')->name('signin');
Route::view('/signup', 'signup')->name('signup');
Route::view('/blog', 'blog')->name('blog');
Route::view('/profile', 'profile')->name('profile');