<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('#portfolio', [IndexController::class, 'index'])->name('portfolio');
Route::get('#about',[IndexController::class, 'index'])->name('about');
Route::get('#contacts', [IndexController::class, 'index'])->name('contacts');
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects', [TechnologyController::class, 'index']);

