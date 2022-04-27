<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

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
        return $this->hasMany(TBLExamenesPreguntas::class, 'idExamen', 'idExamen');
    }

    public function tbl_preguntas()
    {
        return $this->belongsToMany(TBLPreguntas::class, TBLExamenesPreguntas::class, 'idExamen', 'idExamen');
    }
}
