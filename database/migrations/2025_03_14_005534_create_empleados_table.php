<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 200); // VARCHAR(200) NOT NULL
            $table->string('Apellido', 100); // VARCHAR(100) NOT NULL
            $table->string('DocumentoIdentidad', 50)->unique(); // VARCHAR(50) UNIQUE NOT NULL
            $table->string('Cargo', 100)->nullable(); // VARCHAR(100) (Opcional)
            $table->date('FechaIngreso'); // DATE NOT NULL
            $table->decimal('Salario', 10, 2)->nullable(); // DECIMAL(10,2) (Opcional)
            $table->enum('Estado', ['Activo', 'Inactivo'])->default('Activo'); // ENUM con valor por defecto
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
