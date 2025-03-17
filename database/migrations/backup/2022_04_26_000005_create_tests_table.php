<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_id');
            $table->string('nombre', 100)->nullable();
            $table->integer('estado')->nullable()->comment('1 activo, 2 inactivo');
            $table->string('descripcion', 250)->nullable();
            $table->integer('test_tipos_usuarios_test_id');
            $table->integer('tipo')->nullable()->comment('1 test , 2 juego');
            $table->integer('version')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('tests');
     }
}
