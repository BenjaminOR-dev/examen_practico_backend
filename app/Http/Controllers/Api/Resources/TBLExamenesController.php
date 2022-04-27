<?php

namespace App\Http\Controllers\Api\Resources;

use App\Helpers\ApiValidation;
use App\Http\Controllers\Controller;
use App\Models\TBLExamenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TBLExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_examenes = TBLExamenes::all();
        return response()->json($tbl_examenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request, [
            'titulo' => ['required', 'string', 'max:60'],
            'preguntas.*' => ['required', 'array', 'exists:tbl_preguntas,cvePregunta', 'max:4']
        ]);

        if ($validator->fails()) {
            return ApiValidation::sendErrors($validator->errors());
        }

        $preguntas = [];
        foreach ($request->preguntas as $preguntaId) {
            array_push($preguntas, [
                'cvePregunta' => $preguntaId,
            ]);
        }

        $registrar = TBLExamenes::create([
            'idUsuario' => auth()->user()->idUsuario,
            'titulo' => $request->titulo
        ])->tbl_examenes_pregunta()->createMany([$preguntas]);

        return response()->json([
            'message' => "Se ha registrado el exámen con folio #{$registrar->idExamen}"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbl_examen = TBLExamenes::where('idExamen', $id)->firstOrFail();
        return response()->json($tbl_examen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request, [
            'titulo' => ['required', 'string', 'max:60', "unique:tbl_examenes,titulo,{$id},idExamen"],
            'preguntas.*' => ['required', 'array', 'exists:tbl_preguntas,cvePregunta', 'unique:tbl_examenes_preguntas,cvePregunta', 'max:4']
        ]);

        if ($validator->fails()) {
            return ApiValidation::sendErrors($validator->errors());
        }

        $preguntas = [];
        foreach ($request->preguntas as $preguntaId) {
            array_push($preguntas, [
                'cvePregunta' => $preguntaId,
            ]);
        }

        $actualizar = TBLExamenes::where('idExamen', $id)->update([
            'titulo' => $request->titulo
        ]);
        $actualizar->tbl_examenes_preguntas()->delete();
        $actualizar->tbl_examenes_preguntas()->createMany([$preguntas]);

        return response()->json([
            'message' => "Se ha actualizado el exámen con folio #{$actualizar->idExamen}"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = TBLExamenes::where('idExamen', $id)->firstOrFail();
        $eliminar->tbl_examenes_preguntas()->delete();
        $eliminar->delete();

        return response()->json([
            'message' => "Se ha eliminado el exámen con folio #{$eliminar->idExamen}"
        ]);
    }
}
