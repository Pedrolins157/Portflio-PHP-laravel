<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;

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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');

Route::group(['middleware' => 'admin'], function () {
   
});

Route::middleware(['auth'])->group(function () {



    Route::get('/perfil', [PerfilController::class, 'mostrarPerfil'])->name('perfil');

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('usuario')->group(function () {
        Route::get('cadastrar', function () {
            return view('usuario/cadastro-usuario');
        })->name('usuario.cadastrar');

        Route::get('consultar', function () {
            return view('usuario/consulta-usuario');
        })->name('usuario.consultar');
    });

    Route::prefix('cliente')->group(function () {
        Route::get('cadastrar', function () {
            return view('cliente/cadastrar-cliente');
        })->name('cliente.cadastrar');

        Route::get('consultar', function () {
            return view('cliente/consultar-cliente');
        })->name('cliente.consultar');
    });

    //pondo de venda 

    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::post('caixa/pdv',[LoginController::class,'LoginPdv'])->name('ponto.de.venda');
Route::get('caixa', function(){
    return view('caixa/pdv');
})->name('caixa');