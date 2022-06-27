<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'bank_id',
        'way',
        'value',
        'date',
        'method',
    ];
}
