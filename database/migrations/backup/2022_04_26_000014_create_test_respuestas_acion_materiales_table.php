<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestRespuestasAcionMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     * @table test_respuestas_acion_materiales
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_respuestas_accion_materiales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_respuesta_accion_id');
            $table->integer('material_id')->nullable();
            $table->integer('tests_respuestas_accion_tests_respuesta_accion_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('test_respuestas_accion_materiales');
     }
}
