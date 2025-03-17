<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastName,
            'DocumentoIdentidad' => $this->faker->unique()->numerify('########'),
            'Cargo' => $this->faker->jobTitle,
            'FechaIngreso' => $this->faker->date,
            'Salario' => $this->faker->randomFloat(2, 1000, 5000),
            'Estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
