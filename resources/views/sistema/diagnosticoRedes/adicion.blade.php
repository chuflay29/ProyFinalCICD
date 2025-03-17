{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Gestión de Diagnostico Redes - Adición</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('diagnostico.redes.lista') }}">Diagnostico Redes</a></li>
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
        <form class="form-valide" id="formlulario" action="{{ route('diagnostico.redes.update',$arrayAEnviar['datos']->diagnosticos_red_id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        @else
        <form class="form-valide" id="formlulario" action="{{ route('diagnostico.redes.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @endif
          <div class="row">
          <div class="col-lg-12 mb-2">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="tipo">Tipo</label>
                          <div class="col-lg-6">
                          <select name="tipo" class="form-control">
                            @foreach($arrayAEnviar['listaDiagnosticoTipos'] as $listaDiagnosticoTipos)
                            <option  {{ old('$listaDiagnosticoTipos', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->tipo==$listaDiagnosticoTipos->diagnostico_tipo_id) ? 'selected=selected' : '') }} value="{{$listaDiagnosticoTipos->diagnostico_tipo_id}}">
                            {{$listaDiagnosticoTipos->nombre}}
                            </option>
                            @endforeach
                          </select>
                          </div>
                        </div>
                      </div>
          <div class="col-lg-12 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="nombre">Nombre<span class="text-danger">*</span></label>
                <div class="col-lg-6">
                  <input class="form-control" name="nombre" title="Valor requerido"  id="nombre" required type="text" value="{{ old('nombre', isset($arrayAEnviar['datos']->nombre) ? $arrayAEnviar['datos']->nombre : '') }}">
                </div>
              </div>
            </div>



            <div class="col-lg-12 mb-2" id="bloque-archivo">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label">Icono 100X100 px</label>
                          <div class="col-lg-6">
                          <div class="custom-file">
                            <input type="file" name="imagen" class="custom-file-input" title="Seleccionar archivo" lang="es">
                            <label class="custom-file-label"></label>
                            @if(isset($arrayAEnviar['datos']))
                            <img src="/uploads/imagenes/{{$arrayAEnviar['datos']->icono}}" width="40px" alt="">
                            @endif
                          </div>

                          </div>
                        </div>
                      </div>


                      <div class="col-lg-12 mb-2">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="tipo">Orden</label>
                          <div class="col-lg-6">
                          <select name="orden" id="orden" class="form-control default-select">
                            <option value="1" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==1) ? 'selected' : '') }}>1</option>
                            <option value="2" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==2) ? 'selected' : '') }}>2</option>
                            <option value="3" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==3) ? 'selected' : '') }}>3</option>
                            <option value="4" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==4) ? 'selected' : '') }}>4</option>
                            <option value="5" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==5) ? 'selected' : '') }}>5</option>
                            <option value="6" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==6) ? 'selected' : '') }}>6</option>
                            <option value="7" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==7) ? 'selected' : '') }}>7</option>
                            <option value="8" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==8) ? 'selected' : '') }}>8</option>
                            <option value="9" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==9) ? 'selected' : '') }}>9</option>
                            <option value="10" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==10) ? 'selected' : '') }}>10</option>
                            <option value="11" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==11) ? 'selected' : '') }}>11</option>
                            <option value="12" {{ old('orden', isset($arrayAEnviar['datos']) && ($arrayAEnviar['datos']->orden==12) ? 'selected' : '') }}>12</option>
                          </select>
                          </div>
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
