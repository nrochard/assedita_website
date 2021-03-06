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

Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->middleware('auth')->name('admin.index');

Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->middleware('auth')->name('admin.users');
Route::get('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'deleteUser'])->middleware('auth')->name("admin.users.delete");

Route::get('/admin/posts', [\App\Http\Controllers\Admin\PostController::class, 'index'])->middleware('auth')->name('admin.posts');
Route::get('/admin/post', [\App\Http\Controllers\Admin\PostController::class, 'displayForm'])->middleware('auth')->name('admin.post');
Route::get('/admin/post/edit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'editPost'])->middleware('auth')->name('admin.post.edit');
Route::post('/admin/post/edit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'updatePost'])->middleware('auth')->name('admin.post.update');
Route::get('/admin/posts/{id}', [\App\Http\Controllers\Admin\PostController::class, 'deletePost'])->middleware('auth')->name("admin.posts.delete");

Route::post('/admin/post', [App\Http\Controllers\Admin\PostController::class, 'storePost'])->middleware(['auth']);

Route::get('/admin/plans', [\App\Http\Controllers\Admin\PlanController::class, 'index'])->middleware('auth')->name('admin.plans');

Route::get('/admin/support', function () {
    return view('admin/support');
})->name("support");

Route::get('/admin/calendar', function () {
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

Route::get('/compte-accueil', [App\Http\Controllers\AccountController::class, 'index'])->middleware(['auth'])->name('account');

Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', [App\Http\Controllers\UserController::class, 'update'])->middleware(['auth'])->name('dashboard.store');


require __DIR__.'/auth.php';
