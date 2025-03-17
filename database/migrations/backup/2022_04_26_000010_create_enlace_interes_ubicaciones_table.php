<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlaceInteresUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     * @table enlace_interes_ubicaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlace_interes_ubicaciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('enlace_ubicacion_id');
            $table->integer('enlace_interes_id')->nullable();
            $table->string('ubicacion', 250)->nullable();
            $table->string('latitud', 45)->nullable();
            $table->string('longitud', 45)->nullable();
            $table->string('ciudad', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('horario', 45)->nullable();
            $table->integer('enlaces_interes_enlace_interes_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('enlace_interes_ubicaciones');
     }
}
