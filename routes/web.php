<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index']);
Route::get('/about', [PublicController::class, 'about']);
Route::get('/products', [PublicController::class, 'products']);
Route::get('/contact', [PublicController::class, 'contact']);
Route::get('/blog', [PublicController::class, 'blog']);
Route::get('/testimonials', [PublicController::class, 'testimonials']);
Route::get('/portfolio', [PublicController::class, 'portfolio']);
Route::get('/faq', [PublicController::class, 'faq']);
Route::get('/pricing', [PublicController::class, 'pricing']);
Route::get('/terms', [PublicController::class, 'terms']);
