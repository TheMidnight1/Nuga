<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/product-listing', function () {
    return view('product-listing');
});


Route::get('/blog-listing', function () {
    return view('blog-listing');
});


Route::get('/blog-detail', function () {
    return view('blog-detail');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/about', function () {
    return view('blog-detail');
})->name('about');
