<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlacesInteresTable extends Migration
{
    /**
     * Run the migrations.
     * @table enlaces_interes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces_interes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('enlace_interes_id');
            $table->string('institucion', 150)->nullable();
            $table->integer('estado')->nullable()->comment('1 activa, 2 inactiva');
            $table->integer('informaciones_informacion_id');
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
       Schema::dropIfExists('enlaces_interes');
     }
}
