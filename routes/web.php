<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { //welcome page
    return view('home');
});


Route::get('/about', function () { //welcome page
    return view('about');
});


Route::get('/contact', function () { //welcome page
    return view(view: 'contact');
});
