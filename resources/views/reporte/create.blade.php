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

                        <form action="{{ route('report.store') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label class="form-label">Proveedor: </label>
                            </br>
                             <select class="form-select" name="key_proveedor">
                                <option selected disabled> Seleccione un proveedor </option>

                                @foreach ($prov as $p)
                                <option value="{{ $p->id }}"> {{ $p->name }} </option>
                                @endforeach

                             </select>
       
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Producto: </label>
                            </br>
                                <select name="key_producto" class="form-select">
                                    <option selected disabled>Seleccione un producto</option>

                                    @foreach ($inv as $i)
                                    <option value=" {{ $i->id }} "> {{ $i->name }} </option>
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="{{ route('report.index') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection