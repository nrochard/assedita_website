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

Route::get('/admin', function () {
    return view('admin/dashboard');
})->name("admin");


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/abonnement', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/abonnement', [App\Http\Controllers\CheckoutController::class, 'store']);

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

Route::get('/compte', function () {
    return view('account');
});



Route::get('/compte-accueil', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', [App\Http\Controllers\UserController::class, 'update'])->middleware(['auth'])->name('dashboard.store');


require __DIR__.'/auth.php';
