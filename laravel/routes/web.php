<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome Home']);
});

Route::get('/project', function () {
    return view('project',  ['title' => 'My Project']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
