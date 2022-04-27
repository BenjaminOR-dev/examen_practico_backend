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
        $examenes = TBLExamenes::where('activo', 1)->get();
        return response()->json($examenes);
    }
}
