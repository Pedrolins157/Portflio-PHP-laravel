<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $perfil = $request->input('perfil');
        $nome = $request->input('nome');

        if ($perfil === 'adm' || $perfil === 'user') {
            $query = User::where('perfil', $perfil);
        } else {
            $query = User::query();
        }

        if ($nome) {
            $query->where('nome', 'like', "%$nome%");
        }
        $users = $query->get();
        return $users;
    }

    public function create(CreateUserRequest $request)
{
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');

        // Verifica se o arquivo é uma imagem
        if ($file->isValid() && strpos($file->getMimeType(), 'image') !== false) {
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $fileName = $name . '.' . $extension;
            $file->move(public_path('img/perfil'), $fileName);

            $data = $request->all();
            $data['senha'] = Hash::make($request->input('senha'));
            $data['foto'] = 'img/perfil/' . $fileName; // Caminho para a foto no seu sistema
            $user = User::create($data);

            return $user;
        } else {
            // Arquivo não é uma imagem válida
            return 'Arquivo inválido! Envie uma imagem válida.';
        }
    } else {
        return 'Arquivo não especificado!';
    }
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




}
