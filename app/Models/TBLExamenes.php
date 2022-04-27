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
        'titulo',
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

    public function tbl_examenes_preguntas()
    {
        return $this->hasMany(TBLExamenesPreguntas::class, 'idExamen', 'idExamen')
    }

    public function tbl_preguntas()
    {
        return $this->belongsToMany(TBLPreguntas::class, TBLExamenesPreguntas::class, 'idExamen', 'idExamen');
    }
}
