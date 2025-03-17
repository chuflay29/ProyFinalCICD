<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Hash;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = 'Usuarios';
        $page_description = 'Usuarios';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $listaUsuarios=User::all();
        $arrayAEnviar=array("listaUsuarios"=>$listaUsuarios);
        //dd($arrayAEnviar);
        return view('sistema.usuarios.lista', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Ruta Crítica Creación';
        $page_description = 'Ruta Crítica Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar['datos']=array();
        return view('sistema.usuarios.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRutaCriticaFormularioRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $pass=$request->get('password');
        $request->validate(
            [
                'email'=>'required|email',
                'password' => 'required|min:6|confirmed',
            ],
            [
                'email.required' => 'El valor es requerido',
                'email.email' => 'El valor es debe ser un correo electrónico',
                'password.required' => 'El campo contraseña es obligatorio',
                'password.min' => 'El valor debe contener al menos 6 dígitos',
                'password.confirmed'=>'La confirmación de la contraseña debe coincidir con la contraseña'
            ]
        );
        //dd($request->password);
        $ModeloObj =new User();
        $ModeloObj->password = bcrypt($pass); //Hash::make($request->password);
        //dd($ModeloObj->password);
        $ModeloObj->email = $request->email;
        $ModeloObj->name = $request->name;
        $ModeloObj->save();
        return redirect()->route('usuarios.lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cecasem\RutaCriticaFormulario $rutaCriticaFormulario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cecasem\RutaCriticaFormulario $rutaCriticaFormulario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRutaCriticaFormularioRequest $request
     * @param  \App\Models\Cecasem\RutaCriticaFormulario             $rutaCriticaFormulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cecasem\RutaCriticaFormulario $rutaCriticaFormulario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ModeloObj =User::find($id);
        $ModeloObj->delete();
        return redirect()->route('usuarios.lista');
    }
    public function cambiar()
    {
        $page_title = 'Ruta Crítica Creación';
        $page_description = 'Ruta Crítica Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar['datos']=array();
        return view('sistema.usuarios.cambiar', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }
    public function cambiarUpdate(Request $request)
    {
        //dd($request);
        $pass=$request->get('password');
        $request->validate(
            [

                'password' => 'required|min:6|confirmed',
            ],
            [
                'password.required' => 'El campo contraseña es obligatorio',
                'password.min' => 'El valor debe contener al menos 6 dígitos',
                'password.confirmed'=>'La confirmación de la contraseña debe coincidir con la contraseña'
            ]
        );

        $usuario=auth()->user();
        $ModeloObj =User::find($usuario->id);
        $ModeloObj->password = bcrypt($pass); //Hash::make($request->password);
        $ModeloObj->save();
        return redirect()->route('dashboard');
    }
}
