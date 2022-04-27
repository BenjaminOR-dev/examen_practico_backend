<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;

class TBLUsuarios extends Authenticatable implements JWTSubject
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
