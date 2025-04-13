<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroApiController extends Controller
{
    public function index()
    {
        return response()->json(Superhero::all());
    }

    public function show($id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json(['message' => 'Superhéroe no encontrado'], 404);
        }

        return response()->json($superhero);
    }

    public function search(Request $request)
    {
        $name = $request->query('name');
        $superhero = Superhero::where('name', 'like', '%' . $name . '%')->get();

        if ($superhero->isEmpty()) {
            return response()->json(['message' => 'Superhéroe no encontrado'], 404);
        }

        return response()->json($superhero);
    }
}
