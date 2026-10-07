<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome', ['title' => 'Welcome Home']);
})->name('welcome');

Route::get('/project', function () {
    return view('project',  ['title' => 'My Project']);
})->name('project');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
