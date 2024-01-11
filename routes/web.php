<?php

use App\Http\Controllers\ComponentController;
use Illuminate\Support\Facades\Route;
use App\Models\Country;

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
Route::get("/country/{country}", function (Country $country) {
    return $country;
})->name("country.show");

Route::get('/test/components/color', [ComponentController::class, 'color']);
Route::get('/test/components/flag', [ComponentController::class, 'flag']);
