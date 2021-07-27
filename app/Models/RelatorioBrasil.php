<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioBrasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'data', 'grafico', 'confirmado_total', 'confirmado_hoje', 'recuperado_total', 'recuperado_hoje','morte_total' , 'morte_hoje'
    ];
}
