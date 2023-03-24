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

                        <form action="{{ route('proveedor.item.store') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label class="form-label">Nombre del producto: </label>
                                <input type="text" class="form-control" name="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Categoria: </label>
                                <select name="category" class="form-select" required>
                                    <option selected disabled> Seleccione una opcion </option>
                                    
                                    @foreach ($cat as $c)
                                    <option value="{{ $c->name }}"> {{$c->name}} </option>
                                    @endforeach
                                    
                                </select>
                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Precio: </label>
                                <input type="text" class="form-control" name="price" required>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cantidad: </label>
                                <input type="number" class="form-control" name="amount" required>
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="formFile">Foto: </label>
                            </br>
                                <input type="file" class="form-control" name="photo" required>
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label class="formFile">Estado: </label>
                            </br>
                                <select name="state" class="form-select">
                                    <option value="No confirmado" selected>No confirmado</option>
                                </select>
                                @error('state')
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
                    <a href="{{ route('proveedor.item.index') }}" class="btn btn-sm btn-danger">Volver</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection