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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/consulation', [App\Http\Controllers\ChatController::class, 'envoi']);
Route::get('/files', [App\Http\Controllers\FileController::class, 'index'])->name('admin.files');
Route::get('messages', [App\Http\Controllers\MessageController::class,'index'])->name('admin.messages');;