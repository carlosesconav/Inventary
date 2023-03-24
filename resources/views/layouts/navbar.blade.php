@section('navbar')
<style>
  img{
    border: 2px solid;
    border-radius: 5px;
  }
</style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('/') }}">
                <img src="{{ asset('images/ICON_1.png') }}" height="50" width="175">
            </a>
          
            @can('admin.home')
            <a href="{{ route('admin.home') }}" class="nav-item nav-link">Usuarios</a>
            @endcan

            <a class="nav-item nav-link" href="{{ route('proveedor.item.index') }}">Inventario</a>
            @can('proveedor.item.index')
            <a class="nav-item nav-link" href="{{ route('cliente.item.index') }}">Proveedores</a>
            @endcan
            <a class="nav-item nav-link" href="{{ route('report.index') }}">Reporte</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        </div>
        </li>
        </div>

        </div>
    </nav>
@endsection
