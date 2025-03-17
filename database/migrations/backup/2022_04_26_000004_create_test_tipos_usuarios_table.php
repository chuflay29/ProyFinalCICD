<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTiposUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     * @table test_tipos_usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_tipos_usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('test_id');
            $table->string('tipo_usuario_id', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('test_tipos_usuarios');
     }
}
