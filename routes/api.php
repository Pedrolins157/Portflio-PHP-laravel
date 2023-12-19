<?php

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('user')->group(function (){
  Route::post('index', [\App\Http\Controllers\Api\UserController::class,'index'])->name('api.users.index');
  Route::post('create', [\App\Http\Controllers\Api\UserController::class,'create'])->name('api.users.create');
  Route::post('update/{user}', [\App\Http\Controllers\Api\UserController::class,'update'])->name('api.users.update');
  Route::delete('delete/{id}', [\App\Http\Controllers\Api\UserController::class,'delete'])->name('api.users.delete');
});

Route::prefix('client')->group(function (){
  Route::post('index', [\App\Http\Controllers\Api\ClientController::class,'index'])->name('api.clients.index');
  Route::post('create', [\App\Http\Controllers\Api\ClientController::class,'create'])->name('api.clients.create');
  Route::post('update/{user}', [\App\Http\Controllers\Api\ClientController::class,'update'])->name('api.clients.update');
  Route::delete('delete/{id}', [\App\Http\Controllers\Api\ClientController::class,'delete'])->name('api.clients.delete');
});

// Route::post('/caixa', [\App\Http\Controllers\Api\LoginController::class,'LoginPdv'])->name('api.ponto.de.venda');

