<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/sass-com-vite', function () {
    return view('sass-com-vite');
});
