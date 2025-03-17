<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests_preguntas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_preguntas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_pregunta_id');
            $table->string('test_id', 150)->nullable();
            $table->integer('tipo')->nullable()->comment('1 pregunta, 2 respuesta');
            $table->string('contenido', 150)->nullable();
            $table->integer('orden')->nullable();
            $table->integer('estado')->nullable()->comment('1 activo, 2 baja');
            $table->integer('tests_test_id');
            $table->integer('respuesta_valor')->nullable()->comment('1 verde, 2 amarillo, 3 rojo');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('tests_preguntas');
     }
}
