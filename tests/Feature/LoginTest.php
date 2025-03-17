<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
class LoginTest extends TestCase
{
    /**
     * CPU-RF1-01 - EXITO
     *
     * @return void
     */
    public function testCPURF101()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                    'email'=>'Juan.Perez',
                    'password'=>'AbCd1F1!'
                ]
            )
        );
        $this->assertEquals(302, $login->getStatusCode());
    }

    /**
     * CPU-RF1-02 - ERROR
     *
     * @return void
     */
    public function testCPURF102()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'Juan.Perez',
                'password'=>'holamundo'
                ]
            )
        );
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF1-03 - ERROR
     *
     * @return void
     */
    public function testCPURF103()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'Juan.Perez',
                'password'=>'Sal'
                ]
            )
        );
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }

    /**
     * CPU-RF1-04 - ERROR
     *
     * @return void
     */
    public function testCPURF104()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'Juan.Perez',
                'password'=>'1234567890123456789012345678901234567890123456789012345'
                ]
            )
        );
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }

    /**
     * CPU-RF1-05 - ERROR
     *
     * @return void
     */
    public function testCPURF105()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'abcdef',
                'password'=>'AbCd1F1!'
                ]
            )
        );
         $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }

    /**
     * CPU-RF1-06 - ERROR
     *
     * @return void
     */
    public function testCPURF106()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'ABC',
                'password'=>'AbCd1F1!'
                ]
            )
        );
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }
    /**
     * CPU-RF1-07 - ERROR
     *
     * @return void
     */
    public function testCPURF107()
    {
        Artisan::call('migrate');
        $login = $this->post(
            route(
                'login.custom', [
                'email'=>'12345678901234567890123456789012345678',
                'password'=>'Sal'
                ]
            )
        );
        $errors = session('errors');
        $messages = $errors->getBag('default')->getMessages();
        $this->assertEquals('Error', $messages['msg'][0]);
    }


}
