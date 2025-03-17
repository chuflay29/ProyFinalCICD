{{-- Extends layout --}}
@extends('templatec.layout.default')
{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Empleados - Adición</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('empleados.lista') }}">Empleados</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Creación</a></li>
  </ol>
</div>
<div class="row">
  <div class="col-xl-12 col-xxl-12">
    <div class="card form-validation">
      <div class="card-header">
        <h4 class="card-title">Registro</h4>
      </div>
      @if (count($errors) > 0)
      <div class="alert alert-danger"> <strong>Error!</strong> Hubo problemas al registrar el proceso
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
      <div class="card-body">
        <form class="form-valide" id="formlulario" action="{{ route('empleados.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="nombre">Nombre<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="Nombre" title="Valor requerido"  id="Nombre" required type="text" value="{{ old('Nombre', isset($arrayAEnviar['datos']->Nombre) ? $arrayAEnviar['datos']->Nombre : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="paterno">Apellido<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="Apellido" title="Valor requerido"  id="Apellido" required type="text" value="{{ old('Apellido', isset($arrayAEnviar['datos']->Apellido) ? $arrayAEnviar['datos']->Apellido : '') }}">
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="DocumentoIdentidad">Documento Identidad*</label>
                <div class="col-lg-8">
                  <input class="form-control" name="DocumentoIdentidad" title="Valor requerido" id="DocumentoIdentidad" required type="text" value="{{ old('DocumentoIdentidad', isset($arrayAEnviar['datos']->DocumentoIdentidad) ? $arrayAEnviar['datos']->DocumentoIdentidad : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="Cargo">Cargo<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="Cargo" title="Valor requerido"  id="Cargo" required type="text" value="{{ old('Cargo', isset($arrayAEnviar['datos']->Cargo) ? $arrayAEnviar['datos']->Cargo : '') }}">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="FechaIngreso">Fecha Ingreso*</label>
                <div class="col-lg-8">
                  <input class="form-control" name="FechaIngreso" title="Valor requerido" id="FechaIngreso" type="text" required value="{{ old('FechaIngreso', isset($arrayAEnviar['datos']->FechaIngreso) ? $arrayAEnviar['datos']->FechaIngreso : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="Salario">Salario</label>
                <div class="col-lg-8">
                  <input class="form-control" name="Salario" id="Salario" type="text" value="{{ old('Salario', isset($arrayAEnviar['datos']->Salario) ? $arrayAEnviar['datos']->Salario : '') }}">
                </div>
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-lg-11">
              <div class="form-group">
                <div class="ml-auto float-right">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </div>
            <div class="col-lg-1"> </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('javascript-footer')
<script type="text/javascript">
$(document).ready(function(){
  $('#tipo').on('change', function() {
    if(this.value==3){
      $("#bloque-url").fadeIn('slow');
      $("#bloque-archivo").hide();
    }else{
      $("#bloque-url").hide();
      $("#bloque-archivo").fadeIn('slow');
    }
  });
});
</script>
@endsection
