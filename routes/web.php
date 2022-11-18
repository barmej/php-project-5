<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;


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


Route::get('/', [BrandController ::class, 'index'])->name('brands');

Route::get('/cars/{id}', [CarController::class, 'index'])->name('cars');

Route::get('/cars/show/{car}', [CarController::class, 'show'])->name('cars.show');

