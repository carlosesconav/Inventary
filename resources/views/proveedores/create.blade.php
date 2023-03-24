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

                        <form action="{{ route('cliente.item.store') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="mb-3">
                                <label class="form-label">Nombre del proveedor: </label>
                                <input type="text" class="form-control" name="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electronico: </label>
                                <input type="email" class="form-control" name="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ciudad: </label>
                                <input type="text" class="form-control" name="city" required>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Direccion: </label>
                                <input type="text" class="form-control" name="address" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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