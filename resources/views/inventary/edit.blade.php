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

                        <form action="{{ route('proveedor.item.update',$inv->id) }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="mb-3">
                                <label class="form-label">Nombre del producto: </label>
                                <input type="text" class="form-control" name="name" value="{{ $inv->name }}">

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Categoria: </label>
                                <select name="category" class="form-select">

                                    <option selected disabled> {{ $inv->category }} </option>

                                    @foreach ($cat as $c)
                                        <option value="{{ $c->name }}"> {{ $c->name }} </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Precio: </label>
                                <input type="text" class="form-control" name="price" value="{{ $inv->price }}">

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cantidad: </label>
                                <input type="number" class="form-control" name="amount" value="{{ $inv->amount }}">

                            </div>

                            <div class="mb-3">
                                <label class="formFile">Foto: </label>
                                </br>
                                <img src=" {{ asset('storage') . '/' . $inv->photo }} " alt="70" width="70">
                                <input type="file" class="form-control" name="photo" value=" {{ $inv->photo }} ">

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
