<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginUsuario()
    {
        Artisan::call('migrate');
        // Verificacion de que el formulario carga correctamente
        $carga = $this->get(route('login'));
        $carga->assertStatus(200);

        //ingreso a una Url
        $carga = $this->get(route('dashboard'));
        $carga->assertStatus(302)->assertRedirect(route('login'));
        //login incorrecto
        $loginIncorrecto = $this->post(
            route(
                'login.custom', [
                    'email'=>'asd@asd.com',
                    'password'=>'123'
                ]
            )
        );
        /*$loginIncorrecto->assertStatus(302)
            ->assertRedirect(route('login'));
            ->assertSessionHasErrors(
                [
                'email'=>'Credenciales incorrectas'
                ]
            );*/
            /*->assertSessionHasErrors(
                [
                'email'=> __(
                    'validation.required', [
                        'attribute'=>'email'
                    ]
                ),
                'password'=> __(
                    'validation.required', [
                        'attribute'=>'password'
                    ]
                )/*,
                'password'=> __(
                    'validation.min.string', [
                        'attribute'=>'password'
                    ]
                ),
                ]
            )*/;
    }
}
