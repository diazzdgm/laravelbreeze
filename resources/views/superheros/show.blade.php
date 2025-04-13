@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Details of the Superhero</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $superhero->name }}</h5>
                <p class="card-text"><strong>Género:</strong> {{ $superhero->gender }}</p>
                <p class="card-text"><strong>Universo:</strong> {{ $superhero->universe->name }}</p>
                <a href="{{ route('superhero.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
