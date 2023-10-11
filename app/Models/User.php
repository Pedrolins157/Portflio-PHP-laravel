<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    protected $table = 'users';
    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'cpf',
        'foto',
        'login',
        'senha',
        'perfil',
    ];

}
