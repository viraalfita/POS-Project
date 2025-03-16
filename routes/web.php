<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// JOBSHEET 2
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [CategoryController::class, 'foodBeverage'])->name('category.food-beverage');
//     Route::get('/beauty-health', [CategoryController::class, 'beautyHealth'])->name('category.beauty-health');
//     Route::get('/home-care', [CategoryController::class, 'homeCare'])->name('category.home-care');
//     Route::get('/baby-kid', [CategoryController::class, 'babyKid'])->name('category.baby-kid');
// });

// Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

// JOBSHEET 4

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
