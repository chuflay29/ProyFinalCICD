<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     * @table materiales
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('material_id');
            $table->integer('tipo')->nullable()->comment('1, imagen, 2 audio, 3 video');
            $table->string('url', 150)->nullable();
            $table->integer('estado')->nullable()->comment('1 activo, 2 baja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('materiales');
     }
}
