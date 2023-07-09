<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/', [StaticController::class, 'index']);
Route::get('/abute', [StaticController::class, 'abute']);
Route::get('/computers', [StaticController::class, 'computers']);

// Route::get('/', [StaticController::class, 'index']);