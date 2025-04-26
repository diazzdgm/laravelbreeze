<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showFiles()
    {
        $files = Storage::files('public'); // obtiene los archivos

        return view('form', compact('files')); // manda $files a la vista
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        $path = $request->file('file')->store('public');

        return redirect()->route('files')->with('success', 'File uploaded successfully!');
    }

    public function download(Request $request)
    {
        $request->validate([
            'path' => 'required'
        ]);

        return Storage::download($request->path);
    }
}
