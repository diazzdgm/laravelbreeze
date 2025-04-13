<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Universe; // Make sure to import the Universe model
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheros = Superhero::all();
        return view('superheros.index', ['superheros' => $superheros]);
    }

    public function create()
    {
        // Fetch all universes
        $universes = Universe::all();

        // Pass universes data to the 'create' view
        return view('superheros.create', compact('universes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'universe_id' => 'required|exists:universes,id', // Assuming you're using 'universe_id' now
        ]);

        Superhero::create($data);

        return redirect(route('superhero.index'))->with('success', 'Superhero created successfully');
    }

    public function edit(Superhero $superhero)
    {
        // Pass the superhero and all universes to the edit view
        $universes = Universe::all();
        return view('superheros.edit', ['superhero' => $superhero, 'universes' => $universes]);
    }

    public function update(Superhero $superhero, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'universe_id' => 'required', // Assuming you're using 'universe_id' now
        ]);

        $superhero->update($data);

        return redirect(route('superhero.index'))->with('success', 'Superhero updated successfully');
    }

    public function destroy(Superhero $superhero)
{
    // Delete the superhero
    $superhero->delete();

    // Redirect back with a success message
    return redirect()->route('superhero.index')->with('success', 'Superhero deleted successfully');
}


public function show($id)
{
    $superhero = Superhero::find($id);

    if (!$superhero) {
        return redirect()->route('superheros.index')->with('error', 'Superhéroe no encontrado');
    }

    return view('superheros.show', compact('superhero'));
}

}
