<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('home');
});

Route::get('/table', function () {
    return view('table');
});