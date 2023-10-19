<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'estoque';

    protected $fillable = [
        'produto_id',
        'quantidade',
        'preco_compra',
        'data_compra',
        'data_validade',
    ];
}
