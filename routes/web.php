<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/generate-code', function () {
    return view('generate-code');
});

Route::get('/attendance-report', function () {
    return view('attendance-report');
});

Route::get('/self-attendance', function () {
    return view('self-attendance');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/materials', function () {
    return view('materials');
});

Route::get('/classes', function () {
    return view('classes');
});

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/addmaterials', function () {
    return view('addmaterials');
});

Route::get('/addclasses', function () {
    return view('addclasses');
});
