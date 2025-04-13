<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseApiController extends Controller
{
    // GET /api/universes
    public function index()
    {
        return response()->json(Universe::all());
    }

    // GET /api/universes/{id}
    public function show($id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'Universe not found'], 404);
        }

        return response()->json($universe);
    }
}
