<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/article', function () {
    return view('article');
})->name('article');



/*
Route::post('/article/submit', function () {
    dd(Request::all());
})->name('article-form');
*/


Route::post('/article/submit', [ArticleController::class, 'submit'])->name('article-form');



