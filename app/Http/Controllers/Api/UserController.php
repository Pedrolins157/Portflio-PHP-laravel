<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

       return User::all() ;

    }

    public function create(Request $request)
    {
        $user = new User();

        $user = $this->setData($user, $request);

        $user->save();
        
        return $user;
    }

    public function update(Request $request)
    {
        $user = new User();

        $user = $user->find($request->id);

        $user = $this->setData($user, $request);

        $user->save();

        return $user;
    }

    public function delete(Request $request)
    {
        $user = new User();

        $user = $user->find($request->id);
     
        $user->delete();

    }

    protected function setData(User $user, Request $request)
    {
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->data_nascimento = $request->data_nascimento;
        $user->cpf = $request->cpf;
        $user->foto = $request->foto;
        $user->login = $request->login;
        $user->senha = $request->senha;
        $user->perfil = $request->perfil;

        return $user;        
    }


}
