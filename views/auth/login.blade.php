@extends('layouts.app')

@section('titulo', 'Iniciar sesión')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Iniciar sesión</h2>

            @if($error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="mb-3">
                    <label><input type="checkbox" name="remember"> Recordarme</label>
                </div>
                <button class="btn btn-primary w-100">Entrar</button>
            </form>

            <div class="mt-3 text-center">
                <a href="/registro">Crear cuenta</a>
            </div>
        </div>
    </div>
@endsection