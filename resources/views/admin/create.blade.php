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



                        <form action="{{ route('admin.user.create') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label class="form-label">Nombre: </label>
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
                                <label class="form-label">Contraseña: </label>
                                <input type="password" class="form-control" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Confirmar contraseña: </label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Role: </label>
                                <select name="role" class="form-select" required>
                                    <option selected disabled> Seleccione una opcion </option>
                                    <option value="admin"> Admin </option>
                                    <option value="cliente"> Cliente </option>
                                    <option value="proveedor"> Proveedor </option>
                                </select>
                                @error('role')
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
                    <a href="{{ route('admin.home') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
