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
        Schema::create('tbl_examenes_preguntas', function (Blueprint $table) {
            $table->id('idExamenPregunta');
            $table->foreignId('idExamen')->constrained('tbl_examenes', 'idExamen');
            $table->foreignId('cvePregunta')->constrained('tbl_preguntas', 'cvePregunta');
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
        Schema::dropIfExists('tbl_examenes_preguntas');
    }
};
