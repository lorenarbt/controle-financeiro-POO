<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'value',
        'fixed',
        'ini_month',
        'deadline'

    ];
}
