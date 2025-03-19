{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="page-titles">
  <h4>Gestión de Productos</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Productos</a></li>
</ol>
<div class="col-xl-2 col-lg-12"> <a href="{{ route('productos.create') }}" class="btn btn-primary  btn-sm float-right">Crear Producto</a> </div>
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
                  <th><strong>ID</strong></th>
                  <th><strong>Nombre</strong></th>
                  <th><strong>descripcion</strong></th>
                  <th><strong>Precio</strong></th>
                </tr>
              </thead>
              <tbody>
              @if(isset($arrayAEnviar['datosProductos']) && $arrayAEnviar['datosProductos'])
              @foreach($arrayAEnviar['datosProductos'] as $data)
                <tr>
                  <td><strong>{{$data->id}}</strong></td>
                  <td>{{$data->nombre}}</td>
                  <td>{{$data->descripcion}}</td>
                  <td>{{$data->precio}}</td>
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
        var textalert="¿Desea dar de Baja este registro?";
        if(estado==1){
          textalert="¿Desea dar de Alta este registro?";
        }
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
            if(estado==0){
              window.location.href = '/clientes/'+id+'/baja';
            }else{
              window.location.href = '/clientes/'+id+'/alta';
            }
          } else {
            //swal("Your imaginary file is safe!");
          }
        });
    };
  </script>
@endsection
