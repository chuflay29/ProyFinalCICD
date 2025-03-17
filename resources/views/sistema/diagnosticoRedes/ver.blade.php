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
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ver </a></li>
  </ol>
</div>
<!-- row -->
<div class="row">
  <div class="col-xl-12 col-xxl-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detalle del productor</h4>
      </div>
      <div class="card-body">
        <div id="smartwizard-ningunes" class="form-wizard order-create">
         
          <div class="tab-content">
            
              <h4>Datos Generales</h4>
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Primer nombre*</label>
                    <input type="text" name="primer_nombre" value="Pedro" class="form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" class="form-control-plaintext" placeholder="">
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido paterno*</label>
                    <input type="text" name="apellido_paterno" class="form-control-plaintext" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido materno*</label>
                    <input type="text" name="apellido_materno" class="form-control-plaintext" placeholder="" >
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Apellido de casada</label>
                    <input type="text" name="apellido_paterno" class="form-control-plaintext" placeholder="" >
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group"> </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Número de identificación*</label>
                    <input type="text" name="numero_identificacion" class="form-control-plaintext" placeholder="" required>
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
                    <input type="text" name="fecha_nacimiento" class="form-control-plaintext" id="mdate" placeholder="" required>
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
              <br>
            <hr>
            <br>
              <h4>Dirección de vivienda</h4>
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
                    <input type="text" name="direccion" class="form-control-plaintext" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Teléfono*</label>
                    <input type="text" name="direccion" class="form-control-plaintext" placeholder="" required>
                  </div>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label class="text-label">Número de medidor</label>
                    <input type="text" name="medidor" class="form-control-plaintext" placeholder="" required>
                  </div>
                </div>
              </div>
              <br>
            <hr>
              <br>
              <h4>Unidades productivas</h4>
              <div>
              <h5>Dirección</h5>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5 mb-2">
                  <div class="form-group">
                    <label class="text-label">Su domicilio particular es tambien su unidad productiva</label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mb-0">
                    <label class="radio-inline mr-3">
                      <input type="radio" name="optradio">
                      SI</label>
                    <label class="radio-inline mr-3">
                      <input type="radio" name="optradio">
                      NO</label>
                  </div>
                </div>
                <div class="col-lg-3"></div>
              </div>
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
                  <div class="form-group">
                    <label class="text-label">Dirección*</label>
                    <input type="text" name="direccion" class="form-control-plaintext" placeholder="" required>
                  </div>
                </div>
              </div>
              </div>
              <div>
              <hr>
              <h5>Asociación</h5>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5 mb-2">
                  <div class="form-group">
                    <label class="text-label">Esta unidad productiva pertenece a una asociación</label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mb-0">
                    <label class="radio-inline mr-3">
                      <input type="radio" name="optradio">
                      SI</label>
                    <label class="radio-inline mr-3">
                      <input type="radio" name="optradio">
                      NO</label>
                  </div>
                </div>
                <div class="col-lg-3"></div>
              </div>
             
             
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <h6>Seleccionadas</h6>
                  <div class="table-responsive">
                    <table class="table table-responsive-md">
                      <thead>
                        <tr>
                          <th><strong>COD.</strong></th>
                          <th><strong>Nombre</strong></th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><strong>542</strong></td>
                          <td>Ecotambo</td>
                         
                        </tr>
                        <tr>
                          <td><strong>542</strong></td>
                          <td>Ecotambo</td>
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-2"></div>
              </div>
              </div>
              <hr>
              <div>
              <h5>Productos</h5>
              
            
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <h6>Seleccionadas</h6>
                  <div class="table-responsive">
                    <table class="table table-responsive-md">
                      <thead>
                        <tr>
                          <th><strong>COD.</strong></th>
                          <th><strong>Nombre</strong></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><strong>542</strong></td>
                          <td>Zanahoria</td>
                          
                        </tr>
                        <tr>
                          <td><strong>542</strong></td>
                          <td>Ecotambo</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-2"></div>
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

@endsection 