<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [PublicController::class, 'show'])->name('home');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
 });

Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::get('/admin', [AdminController::class, 'show'])->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});