<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('header');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});