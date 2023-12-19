<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $authenticated = Auth::attempt($request->only('login', 'password'));

        if ($authenticated) {
            return redirect()->intended('/');
        }
        return redirect()->back()->withInput()->withErrors(['login' => 'Credenciais inválidas']);
    }          
    public function LoginPdv(Request $request)
    {

        $authenticated = Auth::attempt($request->only('login', 'password'));
        if($authenticated){
            $user = Auth::user();
            $userPerfil = $user->perfil;
            
            if($userPerfil == "assistente_vendas" || $userPerfil == "atendente_caixa") {   
            
                return redirect()->intended('caixa/pdv');
            
            }
                
                 return redirect()->back()->with('error', 'Acesso não autorizado!');
        
        }

    }  

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
