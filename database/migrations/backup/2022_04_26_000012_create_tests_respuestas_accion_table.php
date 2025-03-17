<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsRespuestasAccionTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests_respuestas_accion
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_respuestas_accion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tests_respuesta_accion_id');
            $table->integer('test_id')->nullable();
            $table->integer('respuesta_valor')->nullable();
            $table->string('respuesta_contenido', 250)->nullable();
            $table->integer('tests_preguntas_test_pregunta_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('tests_respuestas_accion');
     }
}
