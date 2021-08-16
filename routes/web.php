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
});

Route::get('/messenger', [App\Http\Controllers\HomeController::class, 'messenger'])->name('messenger');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', [App\Http\Controllers\MessagesController::class, 'index'])->name('messages');
    Route::get('create', [App\Http\Controllers\MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [App\Http\Controllers\MessagesController::class, 'store'])->name('messages.store');
    Route::get('{id}', [App\Http\Controllers\MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [App\Http\Controllers\MessagesController::class, 'update'])->name('messages.update');
});