<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/abonnement', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

Route::post('/abonnement', [\App\Http\Controllers\CheckoutController::class, 'store']);

// Route::get('/abonnement', function () {
//     return view('plan');
// });


Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/carte', function () {
    return view('card');
});

Route::get('/equipe', function () {
    return view('team');
});


Route::get('/reservation', function () {
    return view('booking');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
