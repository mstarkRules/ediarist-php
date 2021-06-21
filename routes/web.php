<?php

use App\Http\Controllers\DiaristController;
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

Route::get('/', [DiaristController::class, 'index'])->name('diarists.index');
Route::get('/diarists/create', [DiaristController::class, 'create'])->name('diarists.create');
Route::post('/diarists', [DiaristController::class, 'store'])->name('diarists.store');