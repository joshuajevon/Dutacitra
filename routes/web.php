<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/project', [HomeController::class, 'project'])->name('project');

Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::prefix('/product')->group(function () {
    Route::get('/automatic-sliding-doors', [HomeController::class, 'automaticSlidingDoors'])->name('automaticSlidingDoors');
    Route::get('/automatic-swing-doors', [HomeController::class, 'automaticSwingDoors'])->name('automaticSwingDoors');
    Route::get('/automatic-revolving-doors', [HomeController::class, 'automaticRevolvingDoors'])->name('automaticRevolvingDoors');
    Route::get('/automatic-hermetic-doors', [HomeController::class, 'automaticHermeticDoors'])->name('automaticHermeticDoors');
});


Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Contact Form
Route::post('/contact-form', [ContactController::class, 'contact'])->name('contact-form');
