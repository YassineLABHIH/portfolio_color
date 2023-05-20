<?php

use App\Http\Controllers\Controller;
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

Route::get('/en', [Controller::class, 'index_en'])->name('english');

Route::get('/fr', [Controller::class, 'index_fr'])->name('french');

Route::get('/ar', [Controller::class, 'index_ar'])->name('arabic');
