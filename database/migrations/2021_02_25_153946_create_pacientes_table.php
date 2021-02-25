<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipos_documento_id');
            $table->string('numero_documento');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->foreignId('genero_id');
            $table->foreignId('departamento_id');
            $table->foreignId('municipio_id');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('tipos_documento_id')->references('id')->on('tipos_documentos');


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
        Schema::dropIfExists('pacientes');
    }
}
