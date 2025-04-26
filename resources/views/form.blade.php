<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload and Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        form {
            margin-bottom: 30px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 10px;
        }
        button {
            background-color: #3490dc;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px;
        }
        button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

    <h1>Upload a File</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <hr>

    <h2>Available Files for Download:</h2>

    <ul>
        @forelse ($files as $file)
            <li>
                {{ basename($file) }}
                <form action="{{ route('download') }}" method="POST" style="display:inline;">
                    @csrf
                    <input type="hidden" name="path" value="{{ $file }}">
                    <button type="submit">Download</button>
                </form>
            </li>
        @empty
            <li>No files available.</li>
        @endforelse
    </ul>

</body>
</html>
