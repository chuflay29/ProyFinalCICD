<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = 'Productos';
        $page_description = 'Productos';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $datosProductos=Producto::all();
        $arrayAEnviar=array(
            'datosProductos' => $datosProductos,
            'busqueda'=> $request
        );
        return view('sistema.productos.lista', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Productos Creación';
        $page_description = 'Productos Creación';
        $logo = "images/logo.png";$logoText = "images/logo-text.png";$action = "form_wizard_cecasem";
        $arrayAEnviar=[];
        return view('sistema.productos.adicion', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'arrayAEnviar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'nombre' => 'required|min:3|max:100',
                'descripcion' => 'nullable|max:255',
                'precio' => 'required|numeric|min:0.01',
            ]);

            $producto = Producto::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
            ]);
            return redirect()->route('productos.index');
        } catch (ValidationException $e) {

            return response()->json(['success' => false, 'message' => $e->errors()], 422);
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'message' => 'Error al crear el producto'], 500);
        }
    }

    public function storeJson(Request $request)
    {
        try {

            $request->validate([
                'nombre' => 'required|min:3|max:100',
                'descripcion' => 'nullable|max:255',
                'precio' => 'required|numeric|min:0.01',
            ]);

            $producto = Producto::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
            ]);
            return response()->json(['success' => true, 'producto' => $producto], 201);
        } catch (ValidationException $e) {

            return response()->json(['success' => false, 'message' => $e->errors()], 422);
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'message' => 'Error al crear el producto'], 500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
