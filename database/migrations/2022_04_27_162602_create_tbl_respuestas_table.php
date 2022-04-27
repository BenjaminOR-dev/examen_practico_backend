<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_respuestas', function (Blueprint $table) {
            $table->id('cveRespuesta');
            $table->foreignId('cvePregunta')->constrained('tbl_preguntas', 'cvePregunta');
            $table->string('desRespuesta', 500);
            $table->boolean('correcta')->default(0);
            $table->boolean('activo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_respuestas');
    }
};
