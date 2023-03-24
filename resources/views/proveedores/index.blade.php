@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <h2> Proveedores: </h2>

            <div class="col-md-8">
                <div class="center">
                    <table class="table table-hover">
                        <thead class="table-bordered">
                            <tr>
                                <th class="center"> N. </th>
                                <th class="center"> Nombre </th>
                                <th class="center"> Correo electronico   </th>
                                <th class="center"> Cidudad </th>
                                <th class="center"> Direccion </th>

                                @can('cliente.item.create')
                                <th class="center"> Acciones </th>
                                @endcan
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($prov as $p)
                            <tr>

                                <th class="center"> {{ $s+=1 }} </th>
                                <th class="center"> {{ $p->name }} </th>
                                <th class="center"> {{ $p->email }} </th>
                                <th class="center"> {{ $p->city }} </th>
                                <th class="center"> {{ $p->address }} </th>
                                
                                @can('cliente.item.create')
                                <th class="center">

                                    <a href="{{ route('cliente.item.edit',$p->id) }}" class="btn btn-sm btn-outline-success" title="editar">Editar</a>

                                    <form action="{{ route('cliente.item.delete',$p->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-sm btn-outline-danger" title="eliminar" value="Eliminar">
                                    </form>

                                </th>
                                @endcan

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <a href="{{ route('cliente.item.create') }}" class="btn btn-sm btn-success">Nuevo registro</a>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection