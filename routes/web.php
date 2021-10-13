<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/portofolio', [HomeController::class, 'portofolio']);
// Route::get('/admin', [HomeController::class, 'admin'])->middleware('auth');
// Route::get('/warning', [HomeController::class, 'warning'])->name('warning');
// Route::get('/user/{id}', [HomeController::class, 'user']);
// Route::get('search', [ProductController::class, 'search']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/tentangkami', [HomeController::class, 'tentangkami']);
Route::get('/kontakkami', [HomeController::class, 'kontakkami']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';
