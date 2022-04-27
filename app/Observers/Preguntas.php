<?php

namespace App\Observers;

use App\Http\Helpers\Bitacora;
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
        Bitacora::registrar("Se registro una nueva pregunta");
    }

    /**
     * Handle the TBLPreguntas "updated" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function updated(TBLPreguntas $TBLPreguntas)
    {
        Bitacora::registrar("Se actualizó la pregunta con ID: {$TBLPreguntas->cvePregunta}");
    }

    /**
     * Handle the TBLPreguntas "deleted" event.
     *
     * @param  \App\Models\TBLPreguntas  $TBLPreguntas
     * @return void
     */
    public function deleted(TBLPreguntas $TBLPreguntas)
    {
        Bitacora::registrar("Se eliminó la pregunta con ID: {$TBLPreguntas->cvePregunta}");
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
