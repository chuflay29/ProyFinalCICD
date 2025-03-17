<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionesMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     * @table informaciones_materiales
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaciones_materiales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('informacion_id');
            $table->integer('material_id')->nullable();
            $table->integer('informaciones_informacion_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('informaciones_materiales');
     }
}
