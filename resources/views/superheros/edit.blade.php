<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit a Superhero</h1>

    <form method="POST" action="{{ route('superhero.update', ['superhero' => $superhero]) }}">
        @csrf
        @method('PUT')

        <!-- Name field -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $superhero->name) }}" required>
        </div>

        <!-- Gender field -->
        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" placeholder="Gender" value="{{ old('gender', $superhero->gender) }}" required>
        </div>

        <!-- Universe selection -->
        <div>
            <label for="universe_id">Universe:</label>
            <select name="universe_id" id="universe_id" required>
                <option value="">Select a Universe</option>
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}" {{ $universe->id == old('universe_id', $superhero->universe_id) ? 'selected' : '' }}>
                        {{ $universe->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Submit button -->
        <div>
            <input type="submit" value="Update">
        </div>

    </form>

</body>
</html>
