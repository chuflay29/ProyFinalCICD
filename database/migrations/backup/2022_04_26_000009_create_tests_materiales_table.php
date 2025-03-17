<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     * @table tests_materiales
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_materiales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tests_materiales');
            $table->integer('test_id')->nullable();
            $table->integer('material_id')->nullable();
            $table->integer('tests_test_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('tests_materiales');
     }
}
