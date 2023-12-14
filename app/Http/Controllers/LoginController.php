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
        $authenticated = Auth::attempt($request->only('email', 'password'));
       
        if ($authenticated) {
            return redirect()->intended('/');
        }
        return redirect()->back()->withInput()->withErrors(['login' => 'Credenciais inválidas']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
