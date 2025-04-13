@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <h2>Superhero List</h2>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('superhero.create') }}" class="btn btn-primary">Create a Superhero</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Universe</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($superheros as $superhero)
                    <tr>
                        <td>{{ $superhero->id }}</td>
                        <td>{{ $superhero->name }}</td>
                        <td>{{ $superhero->gender }}</td>
                        <td>{{ $superhero->universe->name }}</td>
                        <td>
                            <a href="{{ route('superheros.show', $superhero->id) }}" class="btn btn-info btn-sm">View</a>
                        </td>
                        <td>
                            <a href="{{ route('superhero.edit', $superhero) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('superhero.destroy', $superhero) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this superhero?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
