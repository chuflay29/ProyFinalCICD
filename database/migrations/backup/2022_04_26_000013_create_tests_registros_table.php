<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests_registros
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_registros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_registro_id');
            $table->integer('test_id')->nullable();
            $table->integer('tipo_usuario_id')->nullable();
            $table->integer('test_pregunta_id')->nullable();
            $table->dateTime('fecha')->nullable();
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
       Schema::dropIfExists('tests_registros');
     }
}
