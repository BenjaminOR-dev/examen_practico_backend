<?php

namespace App\Observers;

use App\Models\TBLAcciones;
use App\Models\TBLBitacoras;
use App\Models\TBLRespuestas;

class Respuestas
{
    /**
     * Handle the TBLRespuestas "created" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function created(TBLRespuestas $TBLRespuestas)
    {
        $accion = TBLAcciones::create([
            "Se registro una nueva respuesta para la pregunta {$TBLRespuestas->cvePregunta}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLRespuestas "updated" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function updated(TBLRespuestas $TBLRespuestas)
    {
        $accion = TBLAcciones::create([
            "Se actualizó la respuesta con ID: {$TBLRespuestas->cveRespuesta}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLRespuestas "deleted" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function deleted(TBLRespuestas $TBLRespuestas)
    {
        $accion = TBLAcciones::create([
            "Se eliminó la respuesta con ID: {$TBLRespuestas->cveRespuesta}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLRespuestas "restored" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function restored(TBLRespuestas $TBLRespuestas)
    {
        //
    }

    /**
     * Handle the TBLRespuestas "force deleted" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function forceDeleted(TBLRespuestas $TBLRespuestas)
    {
        //
    }
}
