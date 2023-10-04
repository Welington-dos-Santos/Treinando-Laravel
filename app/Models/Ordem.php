<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $table = 'ordem';

    protected $primaryKey = 'idopeordemservico';

    protected $fillable = [
        'operador',
        'lote',
    ];
}
