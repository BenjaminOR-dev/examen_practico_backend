<?php

namespace App\Observers;

use App\Models\TBLAcciones;
use App\Models\TBLBitacoras;
use App\Models\TBLExamenes;

class Examenes
{
    /**
     * Handle the TBLExamenes "created" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function created(TBLExamenes $TBLExamenes)
    {
        $accion = TBLAcciones::create([
            "Se registro un nuevo examen"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLExamenes "updated" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function updated(TBLExamenes $TBLExamenes)
    {
        $accion = TBLAcciones::create([
            "Se actualizó el examen con ID: {$TBLExamenes->idExamen}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLExamenes "deleted" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function deleted(TBLExamenes $TBLExamenes)
    {
        $accion = TBLAcciones::create([
            "Se eliminó el examen con ID: {$TBLExamenes->idExamen}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLExamenes "restored" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function restored(TBLExamenes $TBLExamenes)
    {
        //
    }

    /**
     * Handle the TBLExamenes "force deleted" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function forceDeleted(TBLExamenes $TBLExamenes)
    {
        //
    }
}
