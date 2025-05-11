<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
    
    Route::middleware(['auth', 'authorize:ADM'])->group(function () {
        Route::get('/level', [LevelController::class, 'index']);
        Route::get('/level/list', [LevelController::class, 'list']);
        Route::get('/level/create', [LevelController::class, 'create']);
        Route::post('/level', [LevelController::class, 'store']);
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']);
        Route::get('/level/{id}', [LevelController::class, 'show']);
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']);
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::put('/level/{id}', [LevelController::class, 'update']);
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::delete('/level/{id}', [LevelController::class, 'destroy']);
    });


    Route::group([
            'prefix' => 'kategori',
            'middleware' => ['authorize:ADM,MNG']
        ], function () {
        Route::get('/', [KategoriController::class, 'index']);
        Route::get('/list', [KategoriController::class, 'list']);
        Route::get('/create', [KategoriController::class, 'create']);
        Route::post('/', [KategoriController::class, 'store']);
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/{id}', [KategoriController::class, 'show']);
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::get('/{id}/edit', [KategoriController::class, 'edit']);
        Route::put('/{id}', [KategoriController::class, 'update']);
        Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/{id}', [KategoriController::class, 'destroy']);
        Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
    });

    Route::group([
        'prefix' => 'barang',
        'middleware' => ['authorize:ADM,MNG']
    ], function () {
        Route::get('/', [BarangController::class, 'index']);
        Route::get('/create', [BarangController::class, 'create']);
        Route::post('/', [BarangController::class, 'store']);
        Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/{id}', [BarangController::class, 'show']);
        Route::get('/{id}/edit', [BarangController::class, 'edit']);
        Route::put('/{id}', [BarangController::class, 'update']);
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('/{id}', [BarangController::class, 'destroy']);
    });

    Route::group([
        'prefix' => 'supplier',
        'middleware' => ['authorize:ADM,MNG']
    ], function () {
        Route::get('/', [SupplierController::class, 'index']);
        Route::get('/create', [SupplierController::class, 'create']);
        Route::post('/', [SupplierController::class, 'store']);
        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}', [SupplierController::class, 'show']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);
        Route::put('/{id}', [SupplierController::class, 'update']);
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('/{id}', [SupplierController::class, 'destroy']);
    });

    Route::group([
        'prefix' => 'user',
        'middleware' => ['auth', 'authorize:ADM,MNG']
    ], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/list', [UserController::class, 'list']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('/ajax', [UserController::class, 'store_ajax']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });

    Route::group([
        'prefix' => 'penjualan',
        'middleware' => ['auth', 'authorize:ADM,MNG,STF']
    ], function () {
        Route::get('/', [PenjualanController::class, 'index']);
    });

});


