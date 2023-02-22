<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/registration', 'register')->name('page.register');
    Route::get('/auth', 'auth')->name('page.auth');
    Route::middleware('auth')->get('/book/create', 'add')->name('book.create');
});

Route::post('/book/create', [BookController::class, 'store'])->name('book.createPost');

Route::controller(AuthController::class)->group(function(){
    Route::post('/registration', 'registration')->name('register');
    Route::post('/auth', 'auth')->name('auth');
    Route::get('/logout', 'logout')->name('logout');
});

