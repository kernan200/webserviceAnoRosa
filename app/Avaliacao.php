<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $fillable = [
        'valoravaliacao', 'usuario_idusuario', 'medico_idmedico'
    ];
    protected $table = 'avaliacao';
}
