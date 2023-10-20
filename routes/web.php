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
    return view('dashboard');
})->name('/');
Route::get('teste', function () {
    return ('pagina-teste');
});
Route::prefix('usuario')->group(function () {
    Route::get('cadastrar', function () {
        return view('usuario/cadastro-usuario');
    })->name('usuario.cadastrar');

    Route::get('consultar', function () {
        return view('usuario/consulta-usuario');
    })->name('usuario.consultar');

});

Route::prefix('cliente')->group(function (){
    
    Route::get('cadastrar', function () {
        return view('cliente/cadastrar-cliente');
    })->name('cliente.cadastrar');

    Route::get('consultar', function () {
        return view('cliente/consultar-cliente');
    })->name('cliente.consultar');

});
