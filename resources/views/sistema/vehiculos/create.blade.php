{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Vehículos - Adición</h4>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>     --}}
                {{-- <li class="breadcrumb-item"><a href="{{ route('usuarios.lista') }}">Usuarios</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Creación</a></li> --}}
            </ol>
        </div>

        <style>
            .borde {
                border: 2px solid #c71313;
            }

            .linea {
                width: 54%;
                margin-left: 12%;
            }
        </style>

        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form action="{{ route('vehiculos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="text-center d-flex flex-column align-items-center">
                    <input type="file" id="fileInput" accept="image/*" name="imagen">
                    <img class="mt-2 mb-2" id="previewImage" src="#" alt="Vista previa de la imagen"
                        style="display: none; width: 33%; height: 200px;">
                </div>

                <div class="row mt-4">
                    <div class="col-sm-4 text-center mt-2">
                        <label for="">Cliente <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-4">
                        <select class="select2 form-control aiz-selectpicker" name="user_id" data-toggle="select2"
                            data-placeholder="Buscar ..." data-live-search="true" required>
                            <option selected disabled value="">Buscar...</option>
                            @foreach ($listaUsuarios as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="linea">
                    <hr style="border-width: 3px;">
                </div>
                <div class="row mt-4">
                    <div class="col-sm-4 text-center mt-2">
                        <label for="">Placa <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="placa" class="form-control rounded" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-4 text-center mt-2">
                        <label for="">Marca <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="marca" class="form-control rounded" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-4 text-center mt-2">
                        <label for="">Modelo <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="modelo" class="form-control rounded" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-4 text-center mt-2">
                        <label for="">Año <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="anio" class="form-control rounded" required>
                    </div>
                </div>

                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </form>




        </div>
    @endsection
    @section('javascript-footer')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2();
            });

            document.getElementById('fileInput').addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const imgElement = document.getElementById('previewImage');
                        imgElement.src = event.target.result;
                        imgElement.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endsection
