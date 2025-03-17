<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\AppController;
use App\Http\Controllers\EmpleadoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::prefix('v1')->group(function () {
    // /api/v1/
    Route::post('login', [ApiAuthController::class, 'login'])->name('api.login');

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout', [ApiAuthController::class, 'logout'])->name('api.logout');
        //APP
        //Route::apiResource('log_inicio',::class);
        Route::post('log_inicio','App\Http\Controllers\Api\AppController@log_inicio')->name('log_inicio');
        Route::get('obtener_informacion','App\Http\Controllers\Api\AppController@obtener_informacion')->name('obtener_informacion');
    });
});


Route::get('/empleados', [EmpleadoController::class, 'indexTest']);
Route::post('/empleados', [EmpleadoController::class, 'storeTest']);
Route::put('/empleados/{id}', [EmpleadoController::class, 'updateTest']);
Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroyTest']);
