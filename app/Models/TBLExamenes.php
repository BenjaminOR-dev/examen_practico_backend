<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBLExamenes extends Model
{
    use HasFactory;

    protected $table = 'tbl_examenes';
    protected $primaryKey = 'idExamen';
    protected $fillable = [
        'idUsuario',
        'numPreguntas'
    ];

    /**
     * Relaciones
     */
    protected $with = [
        //
    ];

    public function tbl_usuarios()
    {
        return $this->hasOne(TBLUsuarios::class, 'idUsuario', 'idUsuario');
    }
}
