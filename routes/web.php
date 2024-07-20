<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome's);
//     return 'hello world';
// });

Route::get('/index', function () {
    // return view('dashboard.index');
    return view('dashboard/component');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/layout2', function () {
    return view('layout2');
});


Route::get('/newOne', function () {
    return view('newOne');
});


Route::get('/sidebar', function () {
    return view('sidebar');
});


Route::get('/chatgpt', function () {
    return view('chatgpt');
});

