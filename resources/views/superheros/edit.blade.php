@extends('layouts.main')

@section('content')
    <h1>Edit Superhero</h1>

    <form method="POST" action="{{ route('superhero.update', $superhero) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $superhero->name) }}" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" value="{{ old('gender', $superhero->gender) }}" required>
        </div>

        <div>
            <label for="universe_id">Universe:</label>
            <select name="universe_id" required>
                <option value="">Select a Universe</option>
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}" {{ $universe->id == old('universe_id', $superhero->universe_id) ? 'selected' : '' }}>
                        {{ $universe->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
