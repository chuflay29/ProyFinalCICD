<?php

namespace Tests\Feature;
use App\Http\Controllers\ClienteController;
use App\Http\Requests\StoreClienteRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
class ClienteTest extends TestCase
{
    /**
     * CPU-RF10-01 - EXITO
     *
     * @return void
     */
    public function testCPURF1001()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610010',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
    /**
     * CPU-RF10-02 - EXITO
     *
     * @return void
     */
    public function testCPURF1002()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => '',
            'ci' => '4610011',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
    /**
     * CPU-RF10-03 - EXITO
     *
     * @return void
     */
    public function testCPURF1003()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610012',
            'celular' => '',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
    /**
     * CPU-RF10-04 - EXITO
     *
     * @return void
     */
    public function testCPURF1004()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610013',
            'celular' => '77640854',
            'email' => '',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
    /**
     * CPU-RF10-05 - EXITO
     *
     * @return void
     */
    public function testCPURF1005()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610014',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => '',
            ]
        );
        $response = $clienteContrObj->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
    /**
     * CPU-RF10-06 ERROR
     *
     * @return void
     */
    public function testCPURF1006()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Le',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610015',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }

    /**
     * CPU-RF10-07 ERROR
     *
     * @return void
     */
    public function testCPURF1007()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Manuel Alejandro Arturo Fernando Alberto Alonso Miguel',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610016',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-08 ERROR
     *
     * @return void
     */
    public function testCPURF1008()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Jo',
            'materno' => 'Saucedo',
            'ci' => '4610018',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-09 ERROR
     *
     * @return void
     */
    public function testCPURF1009()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Mendizabal Cuellar Ferrante Balcazar Salvatierra Gonzales',
            'materno' => 'Saucedo',
            'ci' => '4610018',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-10 ERROR
     *
     * @return void
     */
    public function testCPURF1010()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Jo',
            'ci' => '4610019',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-11 ERROR
     *
     * @return void
     */
    public function testCPURF1011()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Mendizabal Cuellar Ferrante Balcazar Salvatierra Gonzales',
            'ci' => '4610020',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-12 ERROR
     *
     * @return void
     */
    public function testCPURF1012()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '12',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-13 ERROR
     *
     * @return void
     */
    public function testCPURF1013()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '12345678901234567890123456789012345',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-14 ERROR
     *
     * @return void
     */
    public function testCPURF1014()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610010',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        if($errors) {
            $messages = $errors->getBag('default')->getMessages();
            $this->assertEquals('Error', $messages['msg'][0]);
        }

    }
    /**
     * CPU-RF10-15 ERROR
     *
     * @return void
     */
    public function testCPURF1015()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610021',
            'celular' => '77',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-16 ERROR
     *
     * @return void
     */
    public function testCPURF1016()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610022',
            'celular' => '12345678901234567890123456789012345',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-17 ERROR
     *
     * @return void
     */
    public function testCPURF1017()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610023',
            'celular' => '77640854',
            'email' => 'bo',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-18 ERROR
     *
     * @return void
     */
    public function testCPURF1018()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610023',
            'celular' => '77640854',
            'email' => '12345678901234567890123@gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-19 ERROR
     *
     * @return void
     */
    public function testCPURF1019()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
             'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610025',
            'celular' => '77640854',
            'email' => 'jose.gmail.com',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-20 ERROR
     *
     * @return void
     */
    public function testCPURF1020()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610026',
            'celular' => '77640854',
            'email' => 'micorreo@hola',
            'nombre_empresa' => 'ARO S.R.L.',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-21 ERROR
     *
     * @return void
     */
    public function testCPURF1021()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610027',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'AB',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF10-22 ERROR
     *
     * @return void
     */
    public function testCPURF1022()
    {
        Artisan::call('migrate');
        $clienteContrObj = new ClienteController();
        $request = new StoreClienteRequest(
            [
            'nombres' => 'Jose Andres',
            'paterno' => 'Menacho',
            'materno' => 'Saucedo',
            'ci' => '4610028',
            'celular' => '77640854',
            'email' => 'jose.andres@gmail.com',
            'nombre_empresa' => 'Empresa Boliviana de SRL',
            ]
        );
        $response = $clienteContrObj->store($request);
        $errors = session('errors');
        if($errors) {
            $messages = $errors->getBag('default')->getMessages();
            $this->assertEquals('Error', $messages['msg'][0]);
        }

    }
}
