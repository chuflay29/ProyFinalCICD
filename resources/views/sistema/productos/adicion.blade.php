{{-- Extends layout --}}
@extends('templatec.layout.default')
{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Productos - Adición</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('empleados.lista') }}">Productos</a></li>
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
        <form class="form-valide" id="formlulario" action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="nombre">Nombre<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="nombre" title="Valor requerido"  id="nombre" required type="text" value="{{ old('nombre', isset($arrayAEnviar['datos']->nombre) ? $arrayAEnviar['datos']->nombre : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="paterno">Descripcion<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="descripcion" title="Valor requerido"  id="descripcion" required type="text" value="{{ old('descripcion', isset($arrayAEnviar['datos']->descripcion) ? $arrayAEnviar['datos']->descripcion : '') }}">
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="DocumentoIdentidad">Precio*</label>
                <div class="col-lg-8">
                  <input class="form-control" name="precio" title="Valor requerido" id="precio" required type="text" value="{{ old('precio', isset($arrayAEnviar['datos']->precio) ? $arrayAEnviar['datos']->precio : '') }}">
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
