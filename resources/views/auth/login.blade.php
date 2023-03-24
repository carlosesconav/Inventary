@extends('layouts.app')
@section('content')

<div class="container bg-secondary rounded">
    <div class="row">

        <div class="col bg">

        </div>

        <div class="col">

            <style>

                .bg{

                    background-image: url(images/ICON.jpeg);
                    background-position: center;
                    background-size: 150%;
                }

            </style>

            <h2 class="fw-bold text-center text-white py-5"></h2>

            <div class="text-center">

                <img src=" {{ asset('images/ICON_1.png') }} " class="rounded" height="80" width="295">

            </div>

            <div class="mb-4"></div>

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <div class="mb-4">

                    <label for="email" class="form-lable text-white">Correo electronico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email"
                        id="email" placeholder="Correo electronico">
                    @error('email')
                        <span class="invalid-feedback text-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-4">
                
                    <label for="password" class="form-label text-white">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Constraseña">
                    
                    
                    @error('password')
                    <span class="invalid-feedback text-white" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>
                <div class="mb-4 form-check">
                
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label text-white" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                    
                </div>

                <div class="d-grid">

                    <button type="submit" class="btn btn-dark">
                        {{ __('Ingresar') }}
                    </button>


                </div>

                <div class="text-center">

                    <a class="text-white" href="{{ route('register') }}">¿No tienes una cuenta? Registrate aqui</a>

                </div>
                
                <div class="mb-4">
                    
                </div>



            </form>

        </div>

    </div>
</div>

@endsection