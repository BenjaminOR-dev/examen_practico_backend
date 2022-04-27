<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBLPreguntas extends Model
{
    use HasFactory;

    protected $table = 'tbl_preguntas';
    protected $primaryKey = 'cvePregunta';
    protected $fillable = [
        'desPregunta',
        'activo'
    ];

    /**
     * Relaciones
     */
    protected $with = [
        //
    ];

    public function tbl_respuestas()
    {
        return $this->hasMany(TBLRespuestas::class, 'cvePregunta', 'cvePregunta');
    }
}
