<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Superhero</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif

    </div>
    <div>
        <div>
            <a href="{{route('superhero.create')}}">Create a Superhero</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Universe</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($superheros as $superhero )
                <tr>
                    <td>{{$superhero->id }}</td>
                    <td>{{$superhero->name }}</td>
                    <td>{{$superhero->gender }}</td>
                    <td>{{ $superhero->universe->name }}</td>

                    <td>
                        <a href="{{route('superhero.edit', ['superhero' => $superhero])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('superhero.destroy', $superhero) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this superhero?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>