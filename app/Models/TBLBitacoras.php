<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBLBitacoras extends Model
{
    use HasFactory;

    protected $table = 'tbl_bitacoras';
    protected $primaryKey = 'idBitacora';
    protected $fillable = [
        'idUsuario',
        'cveAccion',
        'fechaMovimiento',
        'fechaActualizacion',
    ];

    /**
     * Relaciones
     */
    protected $with = [
        'tbl_acciones'
    ];

    public function tbl_acciones()
    {
        return $this->hasOne(TBLAcciones::class, 'cveAccion', 'cveAccion');
    }
}
