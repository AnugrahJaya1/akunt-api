<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/transactions', [TransactionController::class, 'index']);
// Route::get('/transactions/{id}', [TransactionController::class, 'show']);
// Route::post('/transactions', [TransactionController::class, 'store']);
// Route::put('/transactions/{id}', [TransactionController::class, 'update']);
// Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);

// pengganti untuk semua yang diatas, tapi memngikuti standar laravel untuk nama methodnya CRUD
Route::resource('/transactions', TransactionController::class)->except(['create','edit']);