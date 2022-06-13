<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    
    protected $fillable = [
        'id',
        'user_id',
        'nome',
        'tipo',
        'saldo',

    ];
}
