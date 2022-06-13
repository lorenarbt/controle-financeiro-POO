<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'bank_id',
        'value',
        'ini_month',
        'method',
        'receiver'
    ];
}
