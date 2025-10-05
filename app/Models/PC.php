<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PC extends Model
{
    protected $fillable =  [
        'nome',
        'processador',
        'placa_mae',
    ];
}
