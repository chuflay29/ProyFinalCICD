<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Exception;
use Illuminate\Http\Request;
use Session;
use Redirect;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = 'Clientes';
        $page_description = 'Clientes';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $datosClientes=Cliente::all();
        $arrayAEnviar=array(
            'datosClientes' => $datosClientes,
            'busqueda'=> $request
        );
        return view('sistema.clientes.lista', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Clientes Creación';
        $page_description = 'Clientes Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar=[];
        return view('sistema.clientes.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $ModeloObj =new Cliente();
        try {
            $request->validate(
                [
                'nombres' => 'required|min:3|max:50',
                'paterno' => 'required|min:3|max:50',
                'materno' => 'nullable|min:3|max:50',
                'ci' => 'required|min:3|max:30|unique:clientes,ci',
                'celular' => 'nullable|min:3|max:30',
                'email' => 'nullable|min:3|max:30|email:rfc,dns',
                'nombre_empresa' => 'nullable|min:5|max:50',
                ]
            );
            $ModeloObj->nombres = $request->get('nombres');
            $ModeloObj->paterno = $request->get('paterno');
            $ModeloObj->materno = $request->get('materno');
            $ModeloObj->ci = $request->get('ci');
            $ModeloObj->celular = $request->get('celular');
            $ModeloObj->email = $request->get('email');
            $ModeloObj->nombre_empresa = $request->get('nombre_empresa');
            $ModeloObj->save();
            return redirect()->route('clientes.lista');
        } catch(\Exception $e){
            return back()->withErrors(['msg' => 'Error']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest $request
     * @param  \App\Models\Cliente                     $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
