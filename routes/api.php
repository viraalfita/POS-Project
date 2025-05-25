<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\Api\RegisterController::class, '__invoke'])->name('register');

Route::post('/login', [App\Http\Controllers\Api\LoginController::class, '__invoke'])->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) { 
    return $request->user(); 
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/user', function(Request $request) {
        return response()->json([
            'success' => true,
            'user' => auth()->guard('api')->user()
        ]);
    });
});
