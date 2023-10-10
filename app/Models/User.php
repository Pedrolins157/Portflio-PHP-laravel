<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    protected $table = 'users';
    protected $fillable = [
        'nome',
        'email',
        'dtnasc',
        'cpf',
        'foto',
        'login',
        'senha',
        'perfil',
    ];

}
