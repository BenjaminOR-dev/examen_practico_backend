<?php

namespace Database\Seeders;

use App\Models\TBLPreguntas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TBLPreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Pregunta 1
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Cuantos años tiene Benjamín',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => '15',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => '21',
                'correcta'     => 1,
            ],
            [
                'desRespuesta' => '18',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => '25',
                'correcta'     => 0,
            ],
        ]);

        /**
         * Pregunta 2
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Donde vive Benjamín?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'Metepec',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Lerma',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Toluca',
                'correcta'     => 1,
            ],
            [
                'desRespuesta' => 'CDMX',
                'correcta'     => 0,
            ],
        ]);

        /**
         * Pregunta 3
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Donde estudió la Universidad Benjamín?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'Santa María Atarasquillo',
                'correcta'     => 1,
            ],
            [
                'desRespuesta' => 'Santa María Totoltepec',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'San Pedro Totoltepec',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'San Miguel Totocuitlapilco',
                'correcta'     => 0,
            ],
        ]);

        /**
         * Pregunta 4
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Que carrera tiene Benjamín?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'Ingeniero en Sistemas',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Ingeniero en TICs',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Ingeniero en Redes y Seguridad',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Ingeniero en Desarrollo y Gestión de Software',
                'correcta'     => 1,
            ],
        ]);

        /**
         * Pregunta 5
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Que carrera de TSU tiene Benjamín?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'TSU en Desarrollo de software multiplataforma',
                'correcta'     => 1,
            ],
            [
                'desRespuesta' => 'TSU en informática',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'TSU en redes de telecomunicaciones',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'TSU en tecnologías de la información',
                'correcta'     => 0,
            ],
        ]);

        /**
         * Pregunta 6
         */
        TBLPreguntas::create([
            'desPregunta' => '¿Cual es el pasatiempo favorito de Benjamín?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'Leer libros',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Jugar Videojuegos',
                'correcta'     => 1,
            ],
            [
                'desRespuesta' => 'Jugar Futbol',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Dibujar',
                'correcta'     => 0,
            ],
        ]);

        /**
         * Pregunta 7
         */
        TBLPreguntas::create([
            'desPregunta' => '¿A donde fue de viaje Benjamín en este año?',
        ])->tbl_respuestas()->createMany([
            [
                'desRespuesta' => 'Cancún',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Queretaro',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Monterrey',
                'correcta'     => 0,
            ],
            [
                'desRespuesta' => 'Guerrero',
                'correcta'     => 1,
            ],
        ]);
    }
}
