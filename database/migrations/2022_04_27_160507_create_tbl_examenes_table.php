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
        Schema::create('tbl_examenes', function (Blueprint $table) {
            $table->id('idExamen');
            $table->foreignId('idUsuario')->constrained('tbl_usuarios', 'idUsuario');
            $table->string('titulo', 60);
            $table->integer('numPreguntas')->default(4);
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
        Schema::dropIfExists('tbl_examenes');
    }
};
