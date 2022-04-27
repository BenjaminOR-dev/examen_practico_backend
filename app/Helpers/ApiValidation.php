<?php

namespace App\Helpers;

class ApiValidation
{
    /**
     *  Retorna los errores de validación de la librería Validator
     *
     *  @param Object $errors
     *  @param String $dataName
     *  @return Response
     */
    public static function sendErrors(Object|array $errors, String $dataName = '')
    {
        if ($dataName != '') {
            return response()->json(['errors' => [$dataName => $errors]], 422);
        } else {
            return response()->json(['errors' => $errors], 422);
        }
    }
}
