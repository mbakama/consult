<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
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

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard')->middleware('verified');
Route::get('/files', [App\Http\Controllers\FileController::class, 'index'])->name('admin.files')->middleware('verified');
Route::get('messages', [App\Http\Controllers\MessageController::class,'index'])->name('admin.messages')->middleware('verified');
Route::get('message/{id}', [App\Http\Controllers\MessageController::class,'show'])->name('admin.message')->middleware('verified');
Route::get('chat/{id}',[MessageController::class,'getMessage'])->name('admin.message')->middleware('verified');

Route::get('list-patients',[HomeController::class,'listPatients'])->name('admin.list-patients');
Route::get('list-patient/{id}',[HomeController::class,'getByIdPatient'])->name('admin.list-patient');
Route::get('/user/profile/{id}',[HomeController::class,'show'])->name('profile');
Route::match(['put', 'patch'], '/user/profile_update/{id}',[UserController::class,'update'])->name('profile_update');

// generete all routes of UserController?
Route::get('/users', [UserController::class,'index']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::post('/users', [UserController::class,'store']);
Route::put('/users/{id}',[UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'destroy']);