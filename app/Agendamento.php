<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'estado', 'especialidade', 'unidade','data', 'horario', 'idcliente'
    ];
}
