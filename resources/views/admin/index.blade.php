@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <h2> Usuarios: </h2>

            <div class="col-md-8">
                <div class="center">
                    <table class="table table-hover">
                        <thead class="table-bordered">
                            <tr>
                                <th class="center"> Nombre </th>
                                <th class="center"> Corre electronico </th>
                                <th class="center"> Fecha de creacion </th>
                                <th class="center"> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <th class="center"> {{ $u->name }} </th>
                                    <th class="center"> {{ $u->email }} </th>
                                    <th class="center"> {{ $u->created_at }} </th>
                                    <th class="center">
                                        <form action="#" method="post">
                                            @csrf
                                            <input type="submit" class="btn btn-sm btn-outline-danger" title="eliminar" value="Eliminar">
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-success">Crear usuario</a>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
