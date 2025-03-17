<?php

namespace App\Http\Controllers;

use App\Models\DiagnosticosRedes;
use App\Http\Requests\StoreDiagnosticosRedesRequest;
use App\Http\Requests\UpdateDiagnosticosRedesRequest;
use Illuminate\Http\Request;
use Session;
class DiagnosticosRedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = 'Diagnostico';
        $page_description = 'Diagnosticos Redes';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $listaDiagnosticosRedes=array();
        if(isset($request->busqueda_tipo_asignacion) || isset($request->busqueda_estado)
            || Session::get('busqueda_tipo_asignacion')!='' || Session::get('busqueda_nombre')!=''
        ) {
            //busqueda
            $DiagnosticosRedesObj=new DiagnosticosRedes();
            if(isset($request->busqueda_tipo) || isset($request->busqueda_tipo_asignacion) || isset($request->busqueda_estado) ||  isset($request->busqueda_nombre)) {
                Session::put('busqueda_tipo', $request->busqueda_tipo);
                Session::put('busqueda_tipo_asignacion', $request->busqueda_tipo_asignacion);
                Session::put('busqueda_estado', $request->busqueda_estado);
                Session::put('busqueda_nombre', $request->busqueda_nombre);

            }else{
                $request->busqueda_tipo=Session::get('busqueda_tipo');
                $request->busqueda_tipo_asignacion=Session::get('busqueda_tipo_asignacion');
                $request->busqueda_estado=Session::get('busqueda_estado');
                $request->busqueda_nombre=Session::get('busqueda_nombre');

            }
            $listaDiagnosticosRedes=$DiagnosticosRedesObj->buscarDiagnosticosRedes($request, 2);
            //dd($listaDiagnosticosRedes);
        }
        $arrayAEnviar=array(
            'datosListaDiagnosticosRedes' => $listaDiagnosticosRedes,
            'listaDiagnosticoTipos'=>[],
            'busqueda'=> $request
        );
        //dd($arrayAEnviar);
        return view('sistema.diagnosticoRedes.lista', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'DiagnosticosRedes Creación';
        $page_description = 'DiagnosticosRedes Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar=array('listaDiagnosticoTipos'=>[]);
        return view('sistema.diagnosticoRedes.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiagnosticosRedesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiagnosticosRedesRequest $request)
    {
        $ModeloObj =new DiagnosticosRedes();
        $ModeloObj->tipo = $request->get('tipo');
        $ModeloObj->nombre = $request->get('nombre');
        $ModeloObj->orden = $request->get('orden');

            //imagen
        if(isset($request->imagen) && $request->imagen->extension()!='') {
            $request->validate(
                [
                'imagen' => 'required|mimes:jpg,jpeg,gif,png|max:2048',
                    ]
            );
            $fileName = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('uploads').'/imagenes/', $fileName);
            $ModeloObj->icono = (isset($fileName) && $fileName!='')?$fileName:'';

        }

        $ModeloObj->save();
        return redirect()->route('diagnostico.redes.lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cecasem\DiagnosticosRedes $diagnosticoRedes
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosticosRedes $diagnosticoRedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cecasem\DiagnosticosRedes $diagnosticoRedes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'DiagnosticosRedes Edición';
        $page_description = 'DiagnosticosRedes Edición';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $datos =DiagnosticosRedes::find($id);
        $arrayAEnviar['datos']=$datos;
        $arrayAEnviar['editar']=1;
        $arrayAEnviar['listaDiagnosticoTipos']=[];
        //dd($datos);
        return view('sistema.diagnosticoRedes.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiagnosticosRedesRequest $request
     * @param  \App\Models\Cecasem\DiagnosticosRedes             $diagnosticoRedes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $ModeloObj =DiagnosticosRedes::find($id);
        $ModeloObj->tipo = $request->get('tipo');
        $ModeloObj->nombre = $request->get('nombre');
        $ModeloObj->orden = $request->get('orden');
        //imagen
        if(isset($request->imagen) && $request->imagen->extension()!='') {
            $request->validate(
                [
                'imagen' => 'required|mimes:jpg,jpeg,gif,png|max:2048',
                ]
            );
            $fileName = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('uploads').'/imagenes/', $fileName);
            $ModeloObj->icono = (isset($fileName) && $fileName!='')?$fileName:'';

        }
         $ModeloObj->save();
         return redirect()->route('diagnostico.redes.lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cecasem\DiagnosticosRedes $diagnosticoRedes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modeloObj=DiagnosticosRedes::find($id);
        $modeloObj->delete();
        return redirect()->route('diagnostico.redes.lista');
    }
    public function baja($id)
    {
        $modeloObj=DiagnosticosRedes::find($id);
        $modeloObj->estado = 0;
        $modeloObj->save();
        return redirect()->route('diagnostico.redes.lista');
    }
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Tienda\Catalogos $catalogos
      * @return \Illuminate\Http\Response
      */
    public function alta($id)
    {
        $modeloObj=DiagnosticosRedes::find($id);
        $modeloObj->estado = 1;
        $modeloObj->save();
        return redirect()->route('diagnostico.redes.lista');
    }
}
