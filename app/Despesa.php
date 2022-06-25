<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'fixed',
        'ini_date',
        'end_date',
        'deadline',
        'relevance',
        'type',
        'value'

    ];
}
