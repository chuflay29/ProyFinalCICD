<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'clientes', function (Blueprint $table) {
                $table->increments('cliente_id');
                $table->string('nombres', 100)->nullable();
                $table->string('paterno', 100)->nullable();
                $table->string('materno', 100)->nullable();
                $table->string('ci', 20)->nullable();
                $table->string('celular', 50)->nullable();
                $table->string('email', 150)->nullable();
                $table->string('nombre_empresa', 150)->nullable();
                $table->integer('estado')->nullable()->comment('0 habilitado, 1 eliminado');;
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
