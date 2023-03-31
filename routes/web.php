<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filterController;
use App\Http\Controllers\AdminLoginController;
// use App\Http\Controllers\Admin\CourceController;
use App\Http\Controllers\User\CourceController;
use App\Http\Middleware\UserAuth;


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



Route::get('/registrationForm',[AdminLoginController::class,'registrationForm'])->name('registration.form');
Route::post('/register',[AdminLoginController::class,'registration'])->name('registration');
Route::get('/loginForm',[AdminLoginController::class,'loginForm'])->name('loginForm');
Route::post('/login',[AdminLoginController::class,'login'])->name('login');
Route::get('logout',[AdminLoginController::class,'logout'])->name('logout');

Route::get('/welcomeAdmin', [filterController::class, 'welcomeAdmin'])->name('welcomeAdmin');

// Route::middleware(['user'])->group(function () {
     Route::get('/dashboard', [filterController::class, 'dashboard'])->name('dashboard');
     Route::get('/courcelist', [CourceController::class, 'index'])->name('courceList');
     Route::get('/import', [CourceController::class, 'import'])->name('import');
     Route::post('/upload', [CourceController::class, 'upload'])->name('upload');
  

// });


Route::middleware(['admin'])->group(function () {
    Route::get('/list', [filterController::class, 'index']);
});

