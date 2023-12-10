<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
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



// Redirect the base URL to the default locale
Route::get('/', function () {
    $locale = session()->get('locale', app()->getLocale());
    return redirect($locale);
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
    Route::get('/terms', [PublicController::class, 'terms']);
    /*Route::resource('blog', BlogController::class);
    Route::resource('news', NewsController::class);*/

    /*
     * Test auti
     */

    Route::get('/dashboard', function () {
        return view('welcome');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/download', [PublicController::class, 'download'])
        ->middleware(['auth', 'verified']);
    /*
     * Auth
     */
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});



// Language switch URL related with LanguageController
// The switch route will have a 'redirect' query parameter to tell the controller where to redirect after switching.
Route::get('/language/{lang}', [LanguageController::class, 'switch'])
    ->name('language.switch')
    ->where('lang', 'en|ar');

/*Route::get('/', function () {
    return view('welcome');
});
*/

require __DIR__.'/auth.php';





