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

Route::prefix('/product')->group(function () {
    Route::get('/automatic-sliding-doors', [HomeController::class, 'automaticSlidingDoors'])->name('automaticSlidingDoorsEn');
    Route::get('/automatic-swing-doors', [HomeController::class, 'automaticSwingDoors'])->name('automaticSwingDoorsEn');
    Route::get('/automatic-revolving-doors', [HomeController::class, 'automaticRevolvingDoors'])->name('automaticRevolvingDoorsEn');
    Route::get('/automatic-hermetic-doors', [HomeController::class, 'automaticHermeticDoors'])->name('automaticHermeticDoorsEn');
});


Route::get('/about', [HomeController::class, 'about'])->name('aboutEn');
Route::get('/about/id', [HomeController::class, 'aboutId'])->name('aboutId');


Route::get('/contact', [HomeController::class, 'contact'])->name('contactEn');
