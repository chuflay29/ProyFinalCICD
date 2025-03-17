<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticosRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos_redes', function (Blueprint $table) {
            $table->increments('diagnosticos_red_id');
            $table->integer('tipo')->nullable()->comment('1 Entornos digitales, 2 juegos, 3 mensajeria, 4 conocer gente');
            $table->string('nombre', 50)->nullable();
            $table->string('icono', 45)->nullable();
            $table->integer('orden')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticos_redes');
    }
}
