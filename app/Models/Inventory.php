<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventario';

    protected $fillable = [
        'produto_id',
        'quantidade',
        'data_inventario',
        'responsavel',
        'observacoes',
        'diferenca',
        'status',
    ];
}
