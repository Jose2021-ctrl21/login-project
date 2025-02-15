<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');;

Route::post('/login', [LoginController::class, 'login'])->name('login.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
