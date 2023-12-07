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
    return view('index');
});
Route::get('/country', function () {
    return view('country');
});
Route::get('/flags', function () {
    return view('flags');
});
Route::get('/global', function () {
    return view('global');
});
Route::get('/error', function () {
    return view('error');
});
