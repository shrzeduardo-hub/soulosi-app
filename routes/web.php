<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('user.beranda');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});