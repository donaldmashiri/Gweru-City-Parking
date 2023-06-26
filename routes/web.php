<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vehicles', \App\Http\Controllers\VehiclesController::class);
Route::resource('clamps', \App\Http\Controllers\ClampController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('chats', \App\Http\Controllers\ChatController::class);

Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');
Route::get('/notify', [App\Http\Controllers\HomeController::class, 'notify'])->name('notify');
