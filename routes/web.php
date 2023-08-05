<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pollingController;
use App\Http\Controllers\resultController;
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

Route::get('/polling-unit', [App\Http\Controllers\pollingController::class, 'index'])->name('pollingUnit');
Route::get('/add-polling-unit', [App\Http\Controllers\pollingController::class, 'create'])->name('AddpollingUnit');
Route::post('/store-polling-unit', [App\Http\Controllers\pollingController::class, 'store'])->name('storepollingUnit');
Route::get('/polling-unit-result', [App\Http\Controllers\resultController::class, 'index'])->name('pollingUnitResult');
Route::get('/addParty', [App\Http\Controllers\partyController::class, 'create'])->name('addParty');
Route::get('/parties', [App\Http\Controllers\partyController::class, 'index'])->name('allParty');
Route::post('/storeParty', [App\Http\Controllers\partyController::class, 'store'])->name('storeParty');