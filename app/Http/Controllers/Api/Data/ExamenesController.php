<?php

namespace App\Http\Controllers\Api\Data;

use App\Http\Controllers\Controller;
use App\Models\TBLExamenes;
use Illuminate\Http\Request;

class ExamenesController extends Controller
{
    /**
     * Retorna los examenes activos
     */
    public function disponibles()
    {
        $examenes = TBLExamenes::query()
            ->where('activo', 1)
            ->orderBy('idExamen', 'DESC')
            ->with(['tbl_usuarios'])
            ->get();

        return response()->json($examenes);
    }
}
