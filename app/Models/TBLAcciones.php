<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBLAcciones extends Model
{
    use HasFactory;

    protected $table = 'tbl_acciones';
    protected $primaryKey = 'cveAccion';
    protected $fillable = [
        'desAccion',
        'activo'
    ];
}
