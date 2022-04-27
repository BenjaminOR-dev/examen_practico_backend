<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBLExamenesPreguntas extends Model
{
    use HasFactory;

    protected $table = 'tbl_examenes_preguntas';
    protected $primaryKey = 'idExamenPregunta';
    protected $fillable = [
        'cvePregunta',
        'activo'
    ];
}
