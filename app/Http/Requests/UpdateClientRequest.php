<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'email' => 'email|unique:clients,email,' . $this->route('client'),
            'cpf' => 'string|size:11|unique:clients,cpf,' . $this->route('client'),
            'estadocivil' => 'nullable|string|max:10',
        ];
    }

    public function messages()
    {
        return [
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não deve ter mais de 50 caracteres.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.size' => 'O CPF deve ter 14 caracteres.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'estadocivil.max' => 'O campo estado civil não deve ter mais de :max caracteres.',
        ];
    }
}
