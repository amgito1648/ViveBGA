@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        {{-- Mensaje de bienvenida --}}
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Bienvenido a <span class="text-primary">ViveBGA</span></h1>
            <p class="lead text-muted">Explora y participa en los eventos culturales y deportivos de Bucaramanga.</p>
        </div>

        {{-- Mostrar nombre del usuario autenticado (si está logueado) --}}
        @auth
            <div class="alert alert-success text-center">
                ¡Hola, <strong>{{ Auth::user()->name }}</strong>! Nos alegra verte de nuevo 🎉
            </div>
        @endauth

        {{-- Sección de eventos destacados (por ahora estática, luego se hará dinámica) --}}
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4" class="card-img-top"
                        alt="Evento cultural">
                    <div class="card-body">
                        <h5 class="card-title">Feria del Libro UIS</h5>
                        <p class="card-text text-muted">Disfruta de conferencias, presentaciones y más actividades
                            literarias.</p>
                        <a href="#" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1508609349937-5ec4ae374ebf" class="card-img-top"
                        alt="Evento deportivo">
                    <div class="card-body">
                        <h5 class="card-title">Carrera 10K Bucaramanga</h5>
                        <p class="card-text text-muted">Corre y disfruta de un ambiente lleno de energía y deporte en la
                            ciudad.</p>
                        <a href="#" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30" class="card-img-top"
                        alt="Evento musical">
                    <div class="card-body">
                        <h5 class="card-title">Festival de Música Andina</h5>
                        <p class="card-text text-muted">Vive una noche con los mejores artistas de música tradicional
                            andina.</p>
                        <a href="#" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
