<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JournalingController;
use App\Models\Journaling;
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

// 元は/journalings
Route::get('/journaling', function () {
    return view('journalings');
})->middleware(['auth', 'verified'])->name('journalings');

//　以下、JournalingのCRUD

// Journaling：ダッシュボード表示(journalings.blade.php)
// Route::get('/journalings', [JournalingController::class,'index'])->middleware(['auth'])->name('journaling_index');
// Route::get('/dashboard', [JournalingController::class,'index'])->middleware(['auth'])->name('dashboard');

//ジャーナリングの一覧	
Route::get('/journalingIndex',[JournalingController::class,"index"])->name('journaling_index');

//Journaling：追加
Route::post('/journalings',[JournalingController::class,"store"])->name('journaling_store');

//Journaling：削除 
Route::delete('/journaling/{journaling}', [JournalingController::class,"destroy"])->name('journaling_destroy');

//Journaling：更新画面
Route::post('/journalingsedit/{journaling}',[JournalingController::class,"edit"])->name('journaling_edit'); //通常
Route::get('/journalingsedit/{journaling}', [JournalingController::class,"edit"])->name('edit');      //Validationエラーありの場合

//Journaling：更新画面
Route::post('/journalings/update',[JournalingController::class,"update"])->name('journaling_update');


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
