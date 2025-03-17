{{-- Extends layout --}}
@extends('templatec.layout.default')
{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Clientes - Adición</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('clientes.lista') }}">Clientes</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Creación</a></li>
  </ol>
</div>
<div class="row">
  <div class="col-xl-12 col-xxl-12">
    <div class="card form-validation">
      <div class="card-header">
        <h4 class="card-title">{{ isset($arrayAEnviar['editar']) ? 'Edición' : 'Registro' }}</h4>
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
      <div class="card-body"> @if (isset($arrayAEnviar['editar']) && $arrayAEnviar['editar']==1)
        <form class="form-valide" id="formlulario" action="{{ route('clientes.update',$arrayAEnviar['datos']->cliente_id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        @else
        <form class="form-valide" id="formlulario" action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @endif
          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="nombre">Nombres<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="nombres" title="Valor requerido"  id="nombres" required type="text" value="{{ old('nombres', isset($arrayAEnviar['datos']->nombre) ? $arrayAEnviar['datos']->nombre : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="paterno">Apellido Paterno<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="paterno" title="Valor requerido"  id="paterno" required type="text" value="{{ old('paterno', isset($arrayAEnviar['datos']->paterno) ? $arrayAEnviar['datos']->paterno : '') }}">
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="materno">Apellido materno</label>
                <div class="col-lg-8">
                  <input class="form-control" name="materno" id="materno" type="text" value="{{ old('materno', isset($arrayAEnviar['datos']->materno) ? $arrayAEnviar['datos']->materno : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="ci">CI<span class="text-danger">*</span></label>
                <div class="col-lg-8">
                  <input class="form-control" name="ci" title="Valor requerido"  id="ci" required type="text" value="{{ old('ci', isset($arrayAEnviar['datos']->ci) ? $arrayAEnviar['datos']->ci : '') }}">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="celular">Celular</label>
                <div class="col-lg-8">
                  <input class="form-control" name="celular" id="celular" type="text" value="{{ old('celular', isset($arrayAEnviar['datos']->celular) ? $arrayAEnviar['datos']->celular : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="email">Email</label>
                <div class="col-lg-8">
                  <input class="form-control" name="email" id="email" type="text" value="{{ old('email', isset($arrayAEnviar['datos']->email) ? $arrayAEnviar['datos']->email : '') }}">
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="nombre_empresa">Nombre de empresa</label>
                <div class="col-lg-8">
                  <input class="form-control" name="nombre_empresa" id="nombre_empresa" type="text" value="{{ old('nombre_empresa', isset($arrayAEnviar['datos']->nombre_empresa) ? $arrayAEnviar['datos']->nombre_empresa : '') }}">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-2">

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
