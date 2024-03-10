<?php

use App\Http\Controllers\CodeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('codes', CodeController::class)->middleware('auth');

Route::get('/attendance-report', function () {
    return view('attendance-report');
});

Route::get('/self-attendance', function () {
    return view('self-attendance');
});

Route::get('/materials', function () {
    return view('materials');
});

Route::get('/classes', function () {
    return view('classes');
});

Route::resource('users', UserController::class)->middleware('auth');

Route::get('/addmaterials', function () {
    return view('addmaterials');
});

Route::get('/addclasses', function () {
    return view('addclasses');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
