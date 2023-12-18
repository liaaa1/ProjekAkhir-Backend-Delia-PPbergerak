<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SayurController;
use App\Http\Controllers\UserController;
use App\Models\Kategori;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/sayur', [KategoriController::class, 'index']);
Route::post('/sayur', [KategoriController::class, 'datasimpan']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'postdata']);
Route::get('/show', [SayurController::class, 'index']);
Route::post('/show', [SayurController::class, 'show']);
Route::get('/show/{id_kategori}', [SayurController::class, 'getSayurByIdKategori']);
