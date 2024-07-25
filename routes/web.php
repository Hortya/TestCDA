<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BookController::class, 'index'])
    ->name('home');
Route::get('/show-{id}', [BookController::class, 'show'])
    ->where(['id', '[0-9]+'])
    ->name('show');
Route::get('/add', [BookController::class, 'create'])
    ->name('add');
Route::post('/store', [BookController::class, 'store'])
    ->name('store');
Route::get('/edit-{id}', [BookController::class, 'edit'])
    ->where(['id', '[0-9]+'])
    ->name('edit');
Route::get('/del-{id}', [BookController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('del');
Route::post('/update-{id}', [BookController::class, 'update'])
    ->name('update');
