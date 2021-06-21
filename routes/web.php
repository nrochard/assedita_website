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

// --- ROUTES POUR L'ADMIN DU SITE ---

Route::get('/admin', function () {
    return view('admin/dashboard');
})->name("admin");

Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');

// Route::get('/users', function () {
//     return view('admin/users');
// })->name("users");

Route::get('/posts', function () {
    return view('admin/posts');
})->name("posts");

Route::get('/plans', function () {
    return view('admin/plans');
})->name("plans");

Route::get('/support', function () {
    return view('admin/support');
})->name("support");

Route::get('/admin-calendar', function () {
    return view('admin/calendar');
})->name("calendar");


// ROUTES POUR LE SITE INTERNET

Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index'])->name('blog');

Route::get('/abonnement', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/abonnement', [App\Http\Controllers\CheckoutController::class, 'store']);


Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/carte', function () {
    return view('card');
})->name('card');

Route::get('/equipe', function () {
    return view('team');
})->name('team');

Route::get('/reservation', function () {
    return view('booking');
})->name('booking');

Route::get('/compte', function () {
    return view('account');
});

Route::get('/compte-accueil', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', [App\Http\Controllers\UserController::class, 'update'])->middleware(['auth'])->name('dashboard.store');


require __DIR__.'/auth.php';
