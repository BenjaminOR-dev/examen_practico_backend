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
        Schema::create('tbl_bitacoras', function (Blueprint $table) {
            $table->id('idBitacora');
            $table->foreignId('idUsuario')->constrained('tbl_usuarios', 'idUsuario');
            $table->foreignId('cveAccion')->constrained('tbl_acciones', 'cveAccion');
            $table->timestamp('fechaMovimiento');
            $table->timestamp('fechaActualizacion');
            $table->mediumText('observaciones');
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
        Schema::dropIfExists('tbl_bitacoras');
    }
};
