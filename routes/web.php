<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnikitController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', [App\Http\Controllers\UnikitController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\UnikitController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('{any}',[UnikitController::class,'index'])->name('index');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
