<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidEstados extends Model
{
    use HasFactory;

    protected $fillable = [
        'data', 'estado_id', 'estado_nome', 'confirmado_total', 'confirmado_hoje', 'recuperado_total', 'recuperado_hoje','morte_total' , 'morte_hoje'
    ];

}
