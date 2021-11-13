<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();


Auth::routes();

Route::get('/directory', [App\Http\Controllers\UserController::class, 'directory'])->name('directory');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');

Route::get('/new-card', [App\Http\Controllers\UserController::class, 'newCard'])->name('newCard');

Route::post('/new-card', [App\Http\Controllers\UserController::class, 'saveCard'])->name('saveCard');

Route::get('/card/{id}', [App\Http\Controllers\UserController::class, 'viewCard'])->name('viewCard');

Route::get('/delete-card/{id}', [App\Http\Controllers\UserController::class, 'deleteCard'])->name('deleteCard');

Route::get('/edit-card/{id}', [App\Http\Controllers\UserController::class, 'editCard'])->name('editCard');

Route::post('/edit-card/{id}', [App\Http\Controllers\UserController::class, 'saveEditCard'])->name('saveEditCard');
