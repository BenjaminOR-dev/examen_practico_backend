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
    protected $appends = [
        'nombre_completo'
    ];

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->paterno} {$this->materno}";
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
