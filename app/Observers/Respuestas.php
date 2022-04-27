<?php

namespace App\Observers;

use App\Models\TBLAcciones;
use App\Models\TBLBitacoras;
use App\Models\TBLRespuestas;
use App\Http\Helpers\Bitacora;

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
        Bitacora::registrar("Se registro una nueva respuesta para la pregunta {$TBLRespuestas->cvePregunta}");
    }

    /**
     * Handle the TBLRespuestas "updated" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function updated(TBLRespuestas $TBLRespuestas)
    {
        Bitacora::registrar("Se actualizó la respuesta con ID: {$TBLRespuestas->cveRespuesta}");
    }

    /**
     * Handle the TBLRespuestas "deleted" event.
     *
     * @param  \App\Models\TBLRespuestas  $TBLRespuestas
     * @return void
     */
    public function deleted(TBLRespuestas $TBLRespuestas)
    {
        Bitacora::registrar("Se eliminó la respuesta con ID: {$TBLRespuestas->cveRespuesta}");
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
