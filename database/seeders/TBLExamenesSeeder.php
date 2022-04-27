<?php

namespace Database\Seeders;

use App\Models\TBLExamenes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TBLExamenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TBLExamenes::create([
            'idUsuario' => 1,
            'titulo' => '¿Cuanto conoces a Benjamín?'
        ])->tbl_examenes_preguntas()->createMany([
            ['cvePregunta' => 1],
            ['cvePregunta' => 2],
            ['cvePregunta' => 3]
        ]);
    }
}
