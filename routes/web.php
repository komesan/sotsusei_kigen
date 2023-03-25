<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/journaling', function () {
    return view('journaling');
})->middleware(['auth', 'verified'])->name('journaling');

Route::get('/flag', function () {
    return view('flag');
})->middleware(['auth', 'verified'])->name('flag');

Route::get('/wishlist', function () {
    return view('wishlist');
})->middleware(['auth', 'verified'])->name('wishlist');

Route::get('/dialog', function () {
    return view('dialog');
})->middleware(['auth', 'verified'])->name('dialog');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
