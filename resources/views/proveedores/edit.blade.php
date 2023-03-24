@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2> Formulario de ingreso de datos: </h2>

            <div class="col-md-8">

                @if (count($errors)>0)

                <div class="alert alert-danger center" role="alert">

                    <strong>
                    <li>Ups algo ha falldo, rectifica los datos ingresados</li>
                    </strong>

                </div>
                @endif

                <div class="card">
                    <div class="center">

                        <form action="{{ route('cliente.item.update',$prov->id) }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="mb-3">
                                <label class="form-label">Nombre del proveedor: </label> 
                                <input type="text" class="form-control" name="name" value="{{ $prov->name }}">
                            
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electronico: </label>
                                <input type="email" class="form-control" name="email" value=" {{ $prov->email }} ">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ciudad: </label>
                                <input type="text" class="form-control" name="city" value=" {{ $prov->city }} ">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Direccion: </label>
                                <input type="text" class="form-control" name="address" value=" {{ $prov->address }} ">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="{{ route('cliente.item.index') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection