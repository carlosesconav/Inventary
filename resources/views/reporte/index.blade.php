@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <h2> Reporte: </h2>

            <div class="col-md-8">
                <div class="center">
                    <table class="table table-hover">
                        <thead class="table-bordered">
                            <tr>
                                <th class="center"> N. </th>
                                <th class="center"> Proveedor </th>
                                <th class="center"> Producto </th>
                                <th class="center"> Acciones </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($rep as $r)
                            <tr>
                                <th class="center"> {{ $s+=1 }} </th>
                                <th class="center"> {{ $r->key_proveedor }} </th>
                                <th class="center"> {{ $r->key_producto }} </th>

                                <th class="center">

                                    <a href="{{ route('report.pdf',$r->id) }}" class="btn btn-sm btn-outline-primary" title="descargar">Descargar</a>

                                    <form action="{{ route('report.destroy',$r->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-sm btn-outline-danger" title="eliminar" value="Eliminar">
                                    </form>

                                </th>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    @can('proveedor.item.index')
                    <a href="{{ route('report.create') }}" class="btn btn-sm btn-success">Nuevo registro</a>
                    @endcan

                    <a href="{{ url('/') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection