@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2> Formulario de edicion de datos: </h2>

            <div class="col-md-8">

                @if (count($errors) > 0)
                    <div class="alert alert-danger center" role="alert">

                        <strong>
                            <li>Ups algo ha falldo, rectifica los datos ingresados</li>
                        </strong>

                    </div>
                @endif

                <div class="card">
                    <div class="center">

                        <form action="{{ route('proveedor.state.check',$inv->id) }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="mb-3">
                                <label class="form-label">Estado: </label>
                            </br>
                                <select name="state" class="form-select">
                                    <option value="Confirmado" selected>Confirmado</option>
                                    <option value="No confirmado" selected>No confirmado</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-success">Confirmar</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="{{ route('proveedor.item.index') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
