<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsPreguntasMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests_preguntas_materiales
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_preguntas_materiales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_pregunta_id');
            $table->integer('material_id')->nullable();
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
       Schema::dropIfExists('tests_preguntas_materiales');
     }
}
