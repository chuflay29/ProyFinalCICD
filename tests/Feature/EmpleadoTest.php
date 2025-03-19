<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Empleado;

class EmpleadoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_listar_empleados()
    {
        Empleado::factory()->count(3)->create();

        $response = $this->getJson('/api/empleados');

        $response->assertStatus(200)->assertJsonCount(3, 'data');
    }

    /** @test */
    public function puede_crear_un_empleado()
    {
        $datos = [
            'Nombre' => 'Juan',
            'Apellido' => 'Pérez',
            'DocumentoIdentidad' => '12345678',
            'Cargo' => 'Desarrollador',
            'FechaIngreso' => '2023-01-01',
            'Salario' => 5000.00,
            'Estado' => 'Activo'
        ];

        $response = $this->postJson('/api/empleados', $datos);

        $response->assertStatus(201)->assertJsonFragment(['Nombre' => 'Juan']);
        $this->assertDatabaseHas('empleados', $datos);
    }

    /** @test */
    public function puede_actualizar_un_empleado()
    {
        $empleado = Empleado::factory()->create();

        $nuevosDatos = [
            'Nombre' => 'Carlos',
            'Apellido' => 'Gómez',
            'DocumentoIdentidad' => $empleado->DocumentoIdentidad,
            'Cargo' => 'Gerente',
            'FechaIngreso' => '2022-06-01',
            'Salario' => 7000.00,
            'Estado' => 'Inactivo'
        ];

        $response = $this->putJson("/api/empleados/{$empleado->id}", $nuevosDatos);

        $response->assertStatus(200)->assertJsonFragment(['Nombre' => 'Carlos']);
        $this->assertDatabaseHas('empleados', $nuevosDatos);
    }

    /** @test */
    public function puede_eliminar_un_empleado()
    {
        $empleado = Empleado::factory()->create();

        $response = $this->deleteJson("/api/empleados/{$empleado->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('empleados', ['id' => $empleado->id]);
    }
}
