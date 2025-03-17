<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{!! url('/dashboard') !!}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">- Dashboard</span>
                </a>
            </li>

            {{-- <li><a href="{!! url('/diagnostico-redes'); !!}" class="ai-icon" aria-expanded="false">
            <i class="flaticon-381-bookmark-1"></i>
            <span class="nav-text">- Diagnosticos</span>
            </a>
        </li> --}}

            <li><a href="{!! url('/clientes') !!}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-1"></i>
                    <span class="nav-text">- Clientes</span>
                </a>
            </li>
            <li><a href="{{ route('empleados.lista') }}" class="ai-icon" aria-expanded="false">

                    <i class="flaticon-381-bookmark-1"></i>
                    <span class="nav-text">- Empleados</span>
                </a>
            </li>

            <li><a href="{{ route('vehiculos.create') }}" class="ai-icon" aria-expanded="false">

                    <i class="flaticon-381-bookmark-1"></i>
                    <span class="nav-text">- Vehículos</span>
                </a>
            </li>
            <li><a href="{{ route('productos.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-1"></i>
                    <span class="nav-text">- Productos</span>
                </a>
            </li>
            <li><a href="{!! url('/usuarios') !!}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-1"></i>
                    <span class="nav-text">- Usuarios</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
