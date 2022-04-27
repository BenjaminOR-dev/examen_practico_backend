<?php

namespace App\Observers;

use App\Models\TBLAcciones;
use App\Models\TBLBitacoras;
use App\Models\TBLPreguntas;

class Preguntas
{
    /**
     * Handle the TBLPreguntas "created" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function created(TBLPreguntas $TBLPreguntas)
    {
        $accion = TBLAcciones::create([
            "Se registro una nueva pregunta"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLPreguntas "updated" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function updated(TBLPreguntas $TBLPreguntas)
    {
        $accion = TBLAcciones::create([
            "Se actualizó la pregunta con ID: {$TBLPreguntas->cvePregunta}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLPreguntas "deleted" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function deleted(TBLPreguntas $TBLPreguntas)
    {
        $accion = TBLAcciones::create([
            "Se eliminó la pregunta con ID: {$TBLPreguntas->cvePregunta}"
        ]);

        TBLBitacoras::create([
            'idUsuario' => auth()->user()->idUsuario,
            'cveAccion' => $accion->cveAccion,
        ]);
    }

    /**
     * Handle the TBLPreguntas "restored" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function restored(TBLPreguntas $TBLPreguntas)
    {
        //
    }

    /**
     * Handle the TBLPreguntas "force deleted" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function forceDeleted(TBLPreguntas $TBLPreguntas)
    {
        //
    }
}
