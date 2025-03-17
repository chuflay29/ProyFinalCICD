<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\log_inicio;
use App\Models\versiones;
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return response()->json([
            'status' => false,
            'msg' => 'No habilitado.'
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function log_inicio(Request $request)
    {
        $log_inicio=new log_inicio();
        $log_inicio->edad=$request->edad;
        $log_inicio->genero=$request->genero;
        $log_inicio->departamento=$request->departamento;
        $log_inicio->ayuda_auditiva=$request->ayuda_auditiva;
        $log_inicio->pictogramas=$request->pictogramas;
        $log_inicio->unidad_educativa=$request->unidad_educativa;
        $log_inicio->telefono=$request->telefono;
        $log_inicio->save();
        if($log_inicio->id){
            return response()->json([
                'status' => true,
                'msg'    => 'Registrado.',
                'id'     => $log_inicio->id
            ]);
        }else{
            return response()->json([
                'status' => false,
                'msg' => 'Error en el registro'
            ]);
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function obtener_informacion(Request $request)
    {

        $ultimaVersion=versiones::where('estado','2')->orderBy('created_at','DESC')->skip(0)->take(1)->get();
        $ultimaVersion[0]->contenido =  json_decode($ultimaVersion[0]->contenido);
        if($ultimaVersion[0]->contenido!=''){
            return response()->json([
                'status' => true,
                'msg'    => 'correcto.',
                'data'   => $ultimaVersion[0]
            ]);
        }else{
            return response()->json([
                'status' => false,
                'msg' => 'Error'
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return response()->json([
            'status' => false,
            'msg' => 'No habilitado.'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return response()->json([
            'status' => false,
            'msg' => 'No habilitado.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'status' => false,
            'msg' => 'No habilitado.'
        ]);

    }

}
