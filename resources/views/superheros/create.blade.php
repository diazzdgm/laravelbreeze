@extends('layouts.main')

@section('content')
    <h1>Create a Superhero</h1>

    <form method="POST" action="{{ route('superhero.store') }}">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" required>
        </div>

        <div>
            <label for="universe_id">Universe:</label>
            <select name="universe_id" required>
                <option value="">Select a Universe</option>
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
