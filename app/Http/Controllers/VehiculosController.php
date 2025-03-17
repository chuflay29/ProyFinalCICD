<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculosController extends Controller
{
    public function create()
    {

        $page_title = 'Usuarios';
        $page_description = 'Usuarios';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = "form_wizard_cecasem";
        $listaUsuarios = User::all();
        return view('sistema.vehiculos.create', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'listaUsuarios'));
    }

    public function store(Request $request)
    {

        // return $request;

        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagen = $request->file('imagen')->store('public/imagenes');
        $url = Storage::url($imagen);

        Vehiculo::create([
            'user_id' => $request->user_id,
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'anio' => $request->anio,
            'url' => $url
        ]);

        return redirect()->back()->with('success', 'Vehículo Registrado correctamente.');
    }
}
