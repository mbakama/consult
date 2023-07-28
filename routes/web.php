<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

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

#news route configarition


Route::get('messages',[MessageController::class,'index'])->name('admin.messages')->middleware(['verified','auth']);
Route::get('conversations',[MessageController::class,'index'])->name('admin.conversations')->middleware(['verified','auth']);
Route::get('conversations/{user}',[MessageController::class,'show'])->name('admin.conversations.show')->middleware(['verified','auth']);
Route::post('conversations/{user}',[MessageController::class,'store'])->middleware(['verified','auth']);
Route::delete('conversations/{id}',[MessageController::class,'destroy'])->name('delete')->middleware(['verified','auth']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware(['verified','auth']); 
Route::get('list-patients',[HomeController::class,'listPatients'])->name('admin.list-patients')->middleware(['verified','auth']);
Route::get('list-patient/{all}',[HomeController::class,'getByIdPatient'])->name('admin.list-patient')->middleware(['verified','auth']);
Route::delete('list-patient/{user}',[HomeController::class,'destroy'])->name('deleted')->middleware(['verified','auth']);


Route::get('/files', [App\Http\Controllers\FileController::class, 'index'])->name('admin.files')->middleware(['verified','auth']); 


Route::get('/users/', [UserController::class,'index'])->middleware(['verified','auth']);
Route::get('/users/profile/{id}', [UserController::class,'show'])->name('users.profile')->middleware(['verified','auth']);
Route::post('/users', [UserController::class,'store'])->middleware(['verified','auth']);
Route::put('/users/profile/',[UserController::class,'update'])->name('users.update')->middleware(['verified','auth']);
Route::delete('/users/{id}', [UserController::class,'destroy'])->middleware(['auth','verified']);
Route::put('users/update',[UserController::class,'update_image'])->name('update')->middleware(['verified','auth']);
Route::post('envoi',[MessageController::class,'store'])->name('envoi')->middleware(['verified','auth']);

Route::put('consult/{id}',[UserController::class,'update_status'])->name('update_status_user')->middleware(['auth','verified']);
Route::get('search',[MessageController::class,'search']);