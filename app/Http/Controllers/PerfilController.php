<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function mostrarPerfil()
{
    
    $user = Auth::user();

   
    if ($user) {
        
        return view('perfil', ['user' => $user]);
    } else {
       
        return redirect()->route('login');
    }
}
}
