<?php

namespace App\Observers;

use App\Models\TBLExamenes;
use App\Http\Helpers\Bitacora;

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
        Bitacora::registrar("Se registró un exámen");
    }

    /**
     * Handle the TBLExamenes "updated" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function updated(TBLExamenes $TBLExamenes)
    {
        Bitacora::registrar("Se actualizó el exámen con ID: {$TBLExamenes->idExamen}");
    }

    /**
     * Handle the TBLExamenes "deleted" event.
     *
     * @param  \App\Models\TBLExamenes  $TBLExamenes
     * @return void
     */
    public function deleted(TBLExamenes $TBLExamenes)
    {
        Bitacora::registrar("Se eliminó el exámen con ID: {$TBLExamenes->idExamen}");
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
