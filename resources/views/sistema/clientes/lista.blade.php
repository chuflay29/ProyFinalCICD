{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="page-titles">
  <h4>Gestión de Clientes</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Clientes</a></li>
</ol>
<div class="col-xl-2 col-lg-12"> <a href="{{ route('clientes.create') }}" class="btn btn-primary  btn-sm float-right">Crear Cliente</a> </div>
</div>
<div class="row">

  <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Búsqueda</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
              <form class="form-valide" id="formlulario" action="{{route('clientes.buscar')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre </label>
                <div class="col-sm-3">
                  <input type="text" name="busqueda_nombre" class="form-control" value="{{ old('nombre', isset($arrayAEnviar['busqueda']) ? $arrayAEnviar['busqueda']->busqueda_nombre : '') }}" placeholder="">
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary  btn-sm">Buscar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
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
                  <th><strong>Apellidos</strong></th>
                  <th><strong>Empresa</strong></th>
                  <th><strong>Correo</strong></th>
                  <th><strong>CI</strong></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @if(isset($arrayAEnviar['datosClientes']) && $arrayAEnviar['datosClientes'])
              @foreach($arrayAEnviar['datosClientes'] as $data)
                <tr>
                  <td><strong>{{$data->cliente_id}}</strong></td>
                  <td>{{$data->nombres}}</td>
                  <td>
                   {{$data->paterno}} {{$data->materno}}
                  </td>
                  <td>
                   {{$data->nombre_empresa}}
                  </td>
                  <td>
                    {{$data->email}}
                  </td>
                  <td>
                    {{$data->ci}}
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="{{ route('clientes.edit',$data->cliente_id) }}" class="btn btn-primary shadow btn-xs sharp mr-1" title="Editar"><i class="fa fa-pencil"></i></a>
                      <a href="javascript:confirmacion({{$data->cliente_id}},0)" class="btn btn-danger shadow btn-xs sharp" title="Dar de delete"><i class="fa fa-thumbs-down"></i></a>
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
