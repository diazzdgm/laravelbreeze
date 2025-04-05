<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Superhero</title>
</head>
<body>
    <h1>Create a Superhero</h1>

    <form method="POST" action="{{ route('superhero.store') }}">
        @csrf

        <!-- Name field -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name" required>
        </div>

        <!-- Gender field -->
        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" placeholder="Gender" required>
        </div>

        <!-- Universe selection -->
        <div>
            <label for="universe_id">Universe:</label>
            <select name="universe_id" id="universe_id" required>
                <option value="">Select a Universe</option>
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Submit button -->
        <div>
            <input type="submit" value="Create">
        </div>
    </form>

</body>
</html>
