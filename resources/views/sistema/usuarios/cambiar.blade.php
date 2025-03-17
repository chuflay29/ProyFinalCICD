{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content') 
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Cambiar contraseña</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>    
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Cambiar</a></li>
  </ol>
</div>
<div class="row">
  <div class="col-xl-12 col-xxl-12">
    <div class="card form-validation">
      <div class="card-header">
        <h4 class="card-title">{{ isset($arrayAEnviar['editar']) ? 'Edición' : 'Cambiar' }}</h4>
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
        <form class="form-valide" id="formlulario" action="{{ route('usuarios.update',$arrayAEnviar['datos']->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        @else
        <form class="form-valide" id="formlulario" action="{{ route('cambiar.update') }}" method="post" enctype="multipart/form-data">
          @csrf
          @endif
          <div class="row">         

            <div class="col-lg-12 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="password">Nueva Contraseña<span class="text-danger">*</span></label>
                <div class="col-lg-6">                  
                  <input class="form-control" name="password" title="Valor requerido"  id="password" required type="password" value="{{ old('password', isset($arrayAEnviar['datos']->password) ? $arrayAEnviar['datos']->password : '') }}">
                </div>
              </div>
            </div> 


            <div class="col-lg-12 mb-2">
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="password_confirmation">Repetir nueva Contraseña<span class="text-danger">*</span></label>
                <div class="col-lg-6">                  
                  <input class="form-control" name="password_confirmation" title="Valor requerido"  id="password_confirmation" required type="password" value="">
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
 
});
</script> 
@endsection 