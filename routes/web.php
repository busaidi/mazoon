<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Redirect the base URL to the default locale
Route::get('/', function () {
    return redirect(app()->getLocale());
});

// Prefix routes with locale
Route::prefix('{locale}')->middleware(['language'])->where(['locale' => 'en|ar'])->group(function () {
    Route::get('/', [PublicController::class, 'index']);
    Route::get('/about', [PublicController::class, 'about']);
    Route::get('/products', [PublicController::class, 'products']);
    Route::get('/mazoon45', [PublicController::class, 'mazoon45']);
    Route::get('/mazoon60', [PublicController::class, 'mazoon60']);
    Route::get('/mazooncw', [PublicController::class, 'mazooncw']);
    Route::get('/contact', [PublicController::class, 'contact']);
    Route::get('/blog', [PublicController::class, 'blog']);
    Route::get('/testimonials', [PublicController::class, 'testimonials']);
    Route::get('/portfolio', [PublicController::class, 'portfolio']);
    Route::get('/faq', [PublicController::class, 'faq']);
    Route::get('/pricing', [PublicController::class, 'pricing']);
    Route::get('/terms', [PublicController::class, 'terms']);
});

// Language switch URL related with LanguageController
// The switch route will have a 'redirect' query parameter to tell the controller where to redirect after switching.
Route::get('/language/{lang}', [LanguageController::class, 'switch'])
    ->name('language.switch')
    ->where('lang', 'en|ar');
