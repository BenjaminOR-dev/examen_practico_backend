<?php

namespace App\Http\Helpers;

use App\Models\{TBLAcciones, TBLBitacoras};

class Bitacora
{
    /**
     * Función que registra una bitacora
     *
     * @param String $accion
     * @return TBLBitacoras $bitacora
     */
    public static function registrar(String $accion)
    {
        $accion = TBLAcciones::create([
            'cveAccion' => $accion
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }
}
