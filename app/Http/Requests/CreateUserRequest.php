<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
    public function prepareForValidation()
    {
        
        $cpf = $this->input('cpf'); 
        $cpf = str_replace(['.', '-'], '', $cpf); 
        $this->merge(['cpf'=>$cpf]); 

    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|size:11|unique:users',
            'foto' => 'nullable|string|max:64',
            'login' => 'required|string|max:30|unique:users',
            'senha' => 'required|string|min:8',
            'perfil' => 'required|in:adm,user',
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'data_nascimento.required' => 'A data de nascimento é obrigatória.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.size' => 'O CPF deve ter 14 caracteres.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'foto.max' => 'A foto não deve ter mais de 64 caracteres.',
            'login.required' => 'O campo login é obrigatório.',
            'login.max' => 'O login não deve ter mais de 30 caracteres.',
            'login.unique' => 'Este login já está em uso.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'perfil.required' => 'O campo perfil é obrigatório.',
            'perfil.in' => 'O perfil deve ser "adm" ou "user".',
        ];
    }
}
