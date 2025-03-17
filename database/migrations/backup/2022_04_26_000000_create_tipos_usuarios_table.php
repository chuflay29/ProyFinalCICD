<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     * @table tipos_usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tipo_usuario_id');
            $table->integer('edad_tipo')->comment('1 menores de 12, 2 mayores de 12');
            $table->integer('genero')->nullable()->comment('1 masculino, 2 femenino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('tipos_usuarios');
     }
}
