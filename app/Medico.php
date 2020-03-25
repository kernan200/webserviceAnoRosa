<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    protected $fillable = [
        'nomemed', 'fotomed', 'cpfmed', 'enderecomed', 'empresa_idempresa'
    ];
    protected $table = 'informacao';
}
