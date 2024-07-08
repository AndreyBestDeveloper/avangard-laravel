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

Route::get('/publish', function () {
    return view('publish');
})->name('publish');


/*
Route::post('/article/submit', function () {
    dd(Request::all());
})->name('article-form');
*/



Route::post('/publish/submit', [ArticleController::class, 'publishSubmit'])->name('publish-submit'); // кнопка формы Опубликовать

Route::get('/publication/list', [ArticleController::class, 'publicationList'])->name('publication-list'); // кнопка меню Статьи 

Route::get('/publication/text/{id}', [ArticleController::class, 'publicationText'])->name('publication-text'); // кнопка выполнения Читать


Route::get('/publication/update/{id}', [ArticleController::class, 'publicationUpdate'])->name('publication-update'); // кнопка выполнения Редактировать

//Route::post('/publication/submit/{id}', [ArticleController::class, 'publicationSubmit'])->name('publication-submit'); // кнопка формы Обновить

