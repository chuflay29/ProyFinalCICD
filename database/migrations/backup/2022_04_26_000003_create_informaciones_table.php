<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionesTable extends Migration
{
    /**
     * Run the migrations.
     * @table informaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('informacion_id');
            $table->string('nombre', 100)->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->integer('estado')->nullable()->comment('1 activa , baja');
            $table->integer('orden')->nullable();
            $table->integer('tipo')->nullable()->comment('1 informacion, 2 ruta critica');
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
       Schema::dropIfExists('informaciones');
     }
}
