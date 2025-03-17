{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
  <div class="page-titles">
  <h4>Usuarios</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>    
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Usuarios</a></li>
</ol>
<div class="col-xl-2 col-lg-12"> <a href="{{ route('usuarios.create') }}" class="btn btn-primary  btn-sm float-right">Crear Usuarios</a> </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Resultados</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-responsive-md">
              <thead>
                <tr>
                  <th><strong>COD.</strong></th>
                  <th><strong>Nombre</strong></th>
                  <th><strong>Email</strong></th>                  
                </tr>
              </thead>
              <tbody>
              @if(isset($arrayAEnviar['listaUsuarios']) )
              @foreach($arrayAEnviar['listaUsuarios'] as $usuario)
                <tr>
                  <td><strong>{{$usuario->id}}</strong></td>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->email}}</td>                 
                  <td>
                    <div class="d-flex">
                      
                      @if($usuario->id!=1)
                      <a href="javascript:confirmacion({{$usuario->id}})" class="btn btn-danger shadow btn-xs sharp" title="Eliminar"><i class="fa fa-trash"></i></a>
                      @endif
                    </div>
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection	
  @section('javascript-footer') 
  <script>
    function confirmacion(id,estado){
        var textalert="¿Desea eliminar este registro?";
        
        swal({
            title: "¿Está seguro? CODº"+id,
            text: textalert,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sí, Estoy seguro",
            cancelButtonText: "No, Cancelar",
        }).then((willDelete) => {
          if (willDelete['value']) {
            window.location.href = '/usuarios/eliminar/'+id;
          } else {
            //swal("Your imaginary file is safe!");
          }
        });
    };
  </script>
@endsection
