<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('homeEn');


Route::get('/project', [HomeController::class, 'project'])->name('projectEn');

Route::get('/product', [HomeController::class, 'product'])->name('productEn');
Route::get('/product/sliding-automatic-doors', [HomeController::class, 'automaticSlidingDoors'])->name('automaticSlidingDoors');


Route::get('/about', [HomeController::class, 'about'])->name('aboutEn');
Route::get('/about/id', [HomeController::class, 'aboutId'])->name('aboutId');


Route::get('/contact', [HomeController::class, 'contact'])->name('contactEn');
