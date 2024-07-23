<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginformController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/trainer', function () {
    return view('trainer');
})->name('trainer');

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



Route::get('/cabinet', function () {return view('cabinet');})->middleware('auth')->name('cabinet');


//Route::view('/register', 'auth.register')->name('register'); // Кнопка (как бы меню) Регистрация, отображает страницу с формой регистрации. 
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register'); 

Route::post('/register', [RegisterController::class, 'process_user'])->middleware('guest')->name('process-user');  // Кнопка формы Зарегистрироваться


Route::get('/loginform', [LoginformController::class, 'loginform'])->name('loginform');  // Кнопка Войти в кабинет

Route::post('/loginform', [LoginformController::class, 'loginconfirm'])->name('loginconfirm');  // Кнопка формы с именем и паролем


//Route::get('/destroy', [LoginformController::class, 'destroy'])->middleware('auth')->name('destroy'); // Кнопка Выйти из личного кабинета (обнуление сессий)
Route::post('/destroy', [LoginformController::class, 'destroy'])->middleware('auth')->name('destroy'); // Кнопка Выйти из личного кабинета (обнуление сессий)


/*
Route::post('/article/submit', function () {
    dd(Request::all());
})->name('article-form');
*/



Route::post('/publish/submit', [ArticleController::class, 'publishSubmit'])->name('publish-submit'); // кнопка формы Опубликовать


Route::get('/publication/list', [ArticleController::class, 'publicationList'])->name('publication-list'); // кнопка меню Статьи 

Route::get('/publication/text/{id}', [ArticleController::class, 'publicationText'])->name('publication-text'); // кнопка выполнения Читать

Route::get('/publication/edit/{id}', [ArticleController::class, 'publicationEdit'])->name('publication-edit'); // кнопка выполнения Редактировать

Route::post('/publication/change/{id}', [ArticleController::class, 'publicationChange'])->name('publication-change'); // кнопка формы Обновить

Route::get('/publication/delete/{id}', [ArticleController::class, 'publicationDelete'])->name('publication-delete'); // кнопка выполнения Редактировать


Route::get('/publication/submit', function () {
    return view('publish');
})->name('publication-submit');

