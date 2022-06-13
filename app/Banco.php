<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'balance',
        'type',

    ];
}
