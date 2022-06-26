<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renda extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'ini_date',
        'desc',
        'value'

    ];
}
