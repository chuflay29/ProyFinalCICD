<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Session;
use Redirect;

class EmpleadoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = 'Empleados';
        $page_description = 'Empleados';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $datosEmpleados=Empleado::all();
        $arrayAEnviar=array(
            'datosEmpleados' => $datosEmpleados,
            'busqueda'=> $request
        );
        return view('sistema.empleados.lista', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Empleados Creación';
        $page_description = 'Empleados Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar=[];
        return view('sistema.empleados.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpleadoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleadoRequest $request)
    {
        $ModeloObj =new Empleado();
        try {
            $request->validate(
                [
                'Nombre' => 'required|string|max:200',
                'Apellido' => 'required|string|max:100',
                'DocumentoIdentidad' => 'required|string|max:50|unique:empleados,DocumentoIdentidad',
                'Cargo' => 'nullable|string|max:100',
                'FechaIngreso' => 'required|date',
                'Salario' => 'nullable|numeric|min:0|max:99999999.99',
                ]
            );
            $ModeloObj->Nombre = $request->get('Nombre');
            $ModeloObj->Apellido = $request->get('Apellido');
            $ModeloObj->DocumentoIdentidad = $request->get('DocumentoIdentidad');
            $ModeloObj->Cargo = $request->get('Cargo');
            $ModeloObj->FechaIngreso = $request->get('FechaIngreso');
            $ModeloObj->Salario = $request->get('Salario');
            $ModeloObj->Estado = 'Activo';//$request->get('FechaIngreso');
            $ModeloObj->save();
            return redirect()->route('empleados.lista');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error inesperado: ' . $e->getMessage()])->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadoRequest  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpleadoRequest $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }



    public function indexTest()
    {
        $empleados = Empleado::all();
        return response()->json(['data' => $empleados], 200);
    }

    public function storeTest(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    public function updateTest(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }

    public function destroyTest($id)
    {
        Empleado::destroy($id);
        return response()->json(null, 204);
    }
}
