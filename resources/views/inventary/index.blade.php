@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <h2> Inventario: </h2>

            <div class="col-md-8">
                <div class="center">
                    <table class="table table-hover">
                        <thead class="table-bordered">
                            <tr>
                                <th class="center"> N. </th>
                                <th class="center"> Foto </th>
                                <th class="center"> Nombre </th>
                                <th class="center"> Categoria </th>
                                <th class="center"> Precio </th>
                                <th class="center"> Estado </th>
                                <th class="center"> Cantidad </th>
                                <th class="center"> Acciones </th>
                                

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($inv as $i)
                            <tr>
                                <th class="center"> {{ $s+=1 }} </th>
                                <th class="center"> <img src=" {{ asset('storage').'/'.$i->photo }} " alt="70" width="70"> </th>
                                <th class="center"> {{ $i->name }} </th>
                                <th class="center"> {{ $i->category }} </th>
                                <th class="center"> {{ number_format($i->price,2) }} </th>
                                <th class="center"> {{ $i->state }} </th>
                                <th class="center"> {{ $i->amount }} </th>

                                
                                <th class="center"> 
                                    @can('proveedor.item.index')
                                    <a href="{{ route('proveedor.item.edit',$i->id) }}" class="btn btn-sm btn-outline-success" title="editar">Editar</a>

                                    <form action=" {{ route('proveedor.item.delete', $i->id) }} " method="POST">
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-sm btn-outline-danger" value="Eliminar" title="eliminar">
                                    </form>
                                    @endcan

                                    @can('proveedor.state.index')
                                        <a href="{{ route('proveedor.state.index',$i->id) }}" class="btn btn-sm btn-outline-dark" title="confimar estado">Confirmar</a>
                                    @endcan

                                </th>
                                

                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    @can('proveedor.item.index')
                    <a href="{{ route('proveedor.item.create') }}" class="btn btn-sm btn-success">Nuevo registro</a>
                    @endcan

                    <a href="{{ url('/') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection