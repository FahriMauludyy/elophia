<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('admin.dashboard'); 
})->name('admin.dashboard'); 

Route::get('/add-product', function () {
    return view('admin.add-product');
})->name('admin.add-product'); 



