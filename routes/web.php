<?php

use App\Http\Controllers\LoginController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.admin');
    });
    Route::get('logout', [LoginController::class, 'logout'])->name('log-out');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('log-in');
});
