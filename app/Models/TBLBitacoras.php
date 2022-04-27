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
        'cveAccion'
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

    public function tbl_acciones()
    {
        return $this->hasOne(TBLAcciones::class, 'cveAccion', 'cveAccion');
    }
}
