<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get(
    '/clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        return "Cache is cleared";
    }
);
//Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
//Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
//Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::group(
    ['middleware' => ['auth']], function () {
        Route::get('/', 'App\Http\Controllers\MophyadminController@dashboard_1');
        Route::get('/dashboard', 'App\Http\Controllers\MophyadminController@dashboard_1')->name('dashboard');
        //Diagnostico redes
        Route::get('/diagnostico-redes', 'App\Http\Controllers\DiagnosticosRedesController@index')->name('diagnostico.redes.lista');
        Route::post('/diagnostico-redes', 'App\Http\Controllers\DiagnosticosRedesController@index')->name('diagnostico.redes.buscar');
        Route::get('/diagnostico-redes/creacion', 'App\Http\Controllers\DiagnosticosRedesController@create')->name('diagnostico.redes.create');
        Route::post('/diagnostico-redes/formulario', 'App\Http\Controllers\DiagnosticosRedesController@store')->name('diagnostico.redes.store');
        Route::get('/diagnostico-redes/{id}/editar', 'App\Http\Controllers\DiagnosticosRedesController@edit')->name('diagnostico.redes.edit');
        Route::match(['put', 'patch'], '/diagnostico-redes/{id}', 'App\Http\Controllers\DiagnosticosRedesController@update')->name('diagnostico.redes.update');
        Route::get('/diagnostico-redes/{id}/baja', 'App\Http\Controllers\DiagnosticosRedesController@destroy')->name('diagnostico.redes.baja');
        Route::get('/diagnostico-redes/{id}/alta', 'App\Http\Controllers\DiagnosticosRedesController@alta')->name('diagnostico.redes.alta');
        //CLIENTES
        Route::get('/clientes', 'App\Http\Controllers\ClienteController@index')->name('clientes.lista');
        Route::post('/clientes', 'App\Http\Controllers\ClienteController@index')->name('clientes.buscar');
        Route::get('/clientes/creacion', 'App\Http\Controllers\ClienteController@create')->name('clientes.create');
        Route::post('/clientes/formulario', 'App\Http\Controllers\ClienteController@store')->name('clientes.store');
        Route::get('/clientes/{id}/editar', 'App\Http\Controllers\ClienteController@edit')->name('clientes.edit');
        Route::match(['put', 'patch'], '/clientes/{id}', 'App\Http\Controllers\ClienteController@update')->name('clientes.update');
        Route::get('/clientes/{id}/baja', 'App\Http\Controllers\ClienteController@destroy')->name('clientes.baja');
        Route::get('/clientes/{id}/alta', 'App\Http\Controllers\ClienteController@alta')->name('clientes.alta');
        //Usuarios
        Route::get('/usuarios/', 'App\Http\Controllers\UsuariosController@index')->name('usuarios.lista');
        Route::get('/usuarios/creacion', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');
        Route::post('/usuarios/formulario', 'App\Http\Controllers\UsuariosController@store')->name('usuarios.store');
        Route::get('/usuarios/eliminar/{usuario_id}', 'App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');
        Route::get('/cambiar-password', 'App\Http\Controllers\UsuariosController@cambiar')->name('cambiar.password');
        Route::post('/cambiar-update', 'App\Http\Controllers\UsuariosController@cambiarUpdate')->name('cambiar.update');

        //Vehículos
        Route::get('/vehículos', 'App\Http\Controllers\VehiculosController@create')->name('vehiculos.create');
        Route::post('/vehículos/store', 'App\Http\Controllers\VehiculosController@store')->name('vehiculos.store');
        //empleados
        Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index')->name('empleados.lista');
        Route::get('/empleados/creacion', 'App\Http\Controllers\EmpleadoController@create')->name('empleados.create');
        Route::post('/empleados/store', 'App\Http\Controllers\EmpleadoController@store')->name('empleados.store');

    }
);
