<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductoController;

class ProductoTest extends TestCase
{

    public function test_producto_creacion_exitoso()
    {

         $this->artisan('migrate');

         $request = new Request([
             'nombre' => 'Laptop Gamer',
             'descripcion' => 'Laptop con tarjeta gráfica RTX 4060',
             'precio' => 1500.00
         ]);

         $productoController = new ProductoController();
         $response = $productoController->storeJson($request);

         $this->assertEquals(201, $response->getStatusCode());
         $this->assertDatabaseHas('productos', [
             'nombre' => 'Laptop Gamer',
             'precio' => 1500.00
         ]);
    }


    public function test_nombre_producto_obligatorio()
    {
        $this->artisan('migrate');

        $request = new Request([
            'nombre' => '',
            'descripcion' => 'Descripción del producto',
            'precio' => 100.00,
        ]);

        $productoController = new ProductoController();
        $response = $productoController->storeJson($request);

        $this->assertEquals(422, $response->getStatusCode());

        $this->assertStringContainsString('nombre', $response->getContent());
    }


    public function test_precio_producto_obligatorio()
    {
        $this->artisan('migrate');

        $request = new Request([
            'nombre' => 'Laptop Gamer',
            'descripcion' => 'Laptop con tarjeta gráfica RTX 4060',
            'precio' => '',
        ]);

        $productoController = new ProductoController();
        $response = $productoController->storeJson($request);

        $this->assertEquals(422, $response->getStatusCode());

        $this->assertStringContainsString('precio', $response->getContent());
    }


    public function test_precio_producto_minimo()
    {
        $this->artisan('migrate');

        $request = new Request([
            'nombre' => 'Laptop Gamer',
            'descripcion' => 'Laptop con tarjeta gráfica RTX 4060',
            'precio' => 0.00,
        ]);

        $productoController = new ProductoController();
        $response = $productoController->storeJson($request);

        $this->assertEquals(422, $response->getStatusCode());

        $this->assertStringContainsString('precio', $response->getContent());
    }


    public function test_descripcion_producto_opcional()
    {
        $this->artisan('migrate');

        $request = new Request([
            'nombre' => 'Laptop Gamer',
            'descripcion' => '',
            'precio' => 1500.00,
        ]);

        $productoController = new ProductoController();
        $response = $productoController->storeJson($request);

        $this->assertEquals(201, $response->getStatusCode());

        $this->assertDatabaseHas('productos', [
            'nombre' => 'Laptop Gamer',
            'precio' => 1500.00,
        ]);
    }





}
