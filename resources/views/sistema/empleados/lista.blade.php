{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="page-titles">
  <h4>Gestión de Empleados</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Empleados</a></li>
</ol>
<div class="col-xl-2 col-lg-12"> <a href="{{ route('empleados.create') }}" class="btn btn-primary  btn-sm float-right">Crear Empleado</a> </div>
</div>

<div class="row">
  <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Resultados de Empleados</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-responsive-md">
              <thead>
                <tr>
                  <th><strong>COD.</strong></th>
                  <th><strong>Nombre</strong></th>
                  <th><strong>Apellido</strong></th>
                  <th><strong>DocumentoIdentidad</strong></th>
                  <th><strong>Estado</strong></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @if(isset($arrayAEnviar['datosEmpleados']) && $arrayAEnviar['datosEmpleados'])
              @foreach($arrayAEnviar['datosEmpleados'] as $data)
                <tr>
                  <td><strong>{{$data->id}}</strong></td>
                  <td>{{$data->Nombre}}</td>
                  <td>
                   {{$data->Apellido}}
                  </td>
                  <td>
                   {{$data->DocumentoIdentidad}}
                  </td>
                  <td>
                    {{$data->Estado}}
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
