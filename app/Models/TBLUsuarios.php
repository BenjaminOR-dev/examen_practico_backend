<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class TBLUsuarios extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'idUsuario';
    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'login',
        'password',
        'activo'
    ];

    /**
     * Atributos
     */
    protected $append = [
        'nombre_completo'
    ];

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->paterno} {$this->materno}";
    }
}
