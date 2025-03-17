{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content') 
<!-- row -->
<div class="container-fluid">
<div class="page-titles">
  <h4>Gestión de Productores - Personas naturales</h4>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Gestión de productores</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Personas naturales</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Creación</a></li>
  </ol>
</div>
<!-- row -->
<div class="row">
  <div class="col-xl-12 col-xxl-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Registro</h4>
      </div>
      <div class="card-body">
        <div id="smartwizard-ningunes" class="form-wizard order-create">
          <ul class="nav nav-wizard">
            <li><a class="nav-link" href="#paso1"> <span>1</span> </a></li>
            <li><a class="nav-link" href="#paso2"> <span>2</span> </a></li>
            
          </ul>
          <div class="tab-content">
            <div id="paso1" class="tab-pane" role="tabpanel">
              <h4>Paso 1 : Datos Generales</h4>
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Primer nombre*</label>
                    <input type="text" name="primer_nombre" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido paterno*</label>
                    <input type="text" name="apellido_paterno" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido materno*</label>
                    <input type="text" name="apellido_materno" class="form-control" placeholder="" >
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido de casada</label>
                    <input type="text" name="apellido_paterno" class="form-control" placeholder="" >
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group"> </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Número de identificación*</label>
                    <input type="text" name="numero_identificacion" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Tipo de identificación*</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Estado civil</label>
                    <select name="estado_civil_clasificador_tipo_id" class="form-control default-select">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Fecha de nacimiento*</label>
                    <input type="text" name="fecha_nacimiento" class="form-control" id="mdate" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Género</label>
                    <select name="genero_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">  
                  <label class="text-label">Fotografía del productor</label>
                    <div class="custom-file">
                  <input type="file" class="custom-file-input" title="Seleccionar archivo" lang="es">
                  <label class="custom-file-label"></label>
                  
                </div></div>
                </div>
              </div>
            </div>
            <div id="paso2" class="tab-pane" role="tabpanel">
              <h4>Paso 2 : Dirección de vivienda</h4>
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">País*</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Departamento*</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Provincia*</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Municipio*</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Localidad</label>
                    <select name="identidicacion_clasificador_tipo_id" class="form-control default-select" required>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group"> </div>
                </div>
                <div class="col-lg-12 mb-2">
                  <div class="form-group">
                    <label class="text-label">Dirección*</label>
                    <input type="text" name="direccion" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Teléfono*</label>
                    <input type="text" name="direccion" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Número de medidor</label>
                    <input type="text" name="medidor" class="form-control" placeholder="" required>
                  </div>
                </div>
              </div>
            </div>
     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 
@section('javascript-footer') 
<script type="text/javascript">
$(document).ready(function(){
  // Toolbar extra buttons
  var btnFinish = $('<button id="finalizar"></button>').text('Finalizar').addClass('btn btn-info').on('click', function(){ alert('Click en finalizar'); });
  $("#smartwizard-ningunes").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
      $("#prev-btn").removeClass('disabled');
      $("#next-btn").removeClass('disabled');
      if(stepPosition === 'first') {
          $("#finalizar").hide();
          $(".sw-btn-next").show();
          $("#prev-btn").addClass('disabled');
      } else if(stepPosition === 'last') {
          $(".sw-btn-next").hide();
          $("#finalizar").show();
      } else {
          $("#finalizar").hide();
          $(".sw-btn-next").show();
          $(".sw-btn-next").removeClass('disabled');
          $("#next-btn").removeClass('disabled');
      }
  });

  // Smart Wizard
  $('#smartwizard-ningunes').smartWizard({    
      // darkMode: true,
      lang: { 
            next: 'Siguiente',
            previous: 'Anterior'
      },
      transition: {
          animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
      },
      toolbarSettings: {        
          toolbarExtraButtons: [btnFinish]
      }
  });

});
</script> 
@endsection 