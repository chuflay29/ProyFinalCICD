<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutaCriticaFormularioTable extends Migration
{
    /**
     * Run the migrations.
     * @table ruta_critica_formulario
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_critica_formulario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ruta_critica_formulario_id');
            $table->integer('tipo_usuario_id')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('telefono_usuario', 45)->nullable();
            $table->string('telefono_confianza', 45)->nullable();
            $table->string('datos', 250)->nullable();
            $table->string('ruta_ids', 150)->nullable();
            $table->string('email_enviado', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('ruta_critica_formulario');
     }
}
