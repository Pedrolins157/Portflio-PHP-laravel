<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {        
        return [
            'nome' => 'string|max:50',
            'email' => 'email|unique:users,email,' . $this->id,
            'data_nascimento' => 'date',
            'cpf' => 'string|size:11|unique:users,cpf,' . $this->id,
            'foto' => 'nullable|string|max:64',
            'login' => 'string|max:30|unique:users,login,' . $this->id,
            'senha' => 'string|min:8',
            'perfil' => 'in:adm,user',
        ];
    }
    public function messages()
    {
        return [
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não deve ter mais de 50 caracteres.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.size' => 'O CPF deve ter 14 caracteres.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'foto.max' => 'A foto não deve ter mais de 64 caracteres.',
            'login.string' => 'O campo login deve ser uma string.',
            'login.max' => 'O login não deve ter mais de 30 caracteres.',
            'login.unique' => 'Este login já está em uso.',
            'senha.string' => 'O campo senha deve ser uma string.',
            'senha.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'perfil.in' => 'O perfil deve ser "adm" ou "user".',
        ];
    }
}
