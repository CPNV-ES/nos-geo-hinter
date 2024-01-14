<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HintController;

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
Route::get('/', [HomePageController::class, 'index']);


Route::get('/countries', function () {
    return view('countries');
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
Route::resources([
    'countries' => CountryController::class
]);
Route::get('/test/components/color', [ComponentController::class, 'color']);
Route::get('/test/components/flag', [ComponentController::class, 'flag']);
Route::post('/api/hint/log', [HintController::class, 'LogUsefullHint'])->name('hint.log');
Route::get('/api/hint/stats', [HintController::class, 'stats'])->name('hint.stats');
Route::get('/test/components/language', [ComponentController::class, 'language']);
Route::get('/test/components/country-header', [ComponentController::class, 'countryHeader']);
Route::get('/test/components/search-bar', [ComponentController::class, 'searchBar']);
Route::get('/test/components/country-card', [ComponentController::class, 'countryCard']);
Route::get('/countries', [CountryController::class, 'index']);
