<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::all();
    }

    public function create(CreateUserRequest $request)
    {        
        return User::create($request->all());      
    }

    public function update(UpdateUserRequest $request, User $user)
    {       
            $user->update($request->all());
            return $user;

            
    }
    public function delete(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso.');
        } else {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado.');
        }
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
