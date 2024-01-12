<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;

use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::orderBy('title','asc')->get();
        return view('actors.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActorRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'nullable|date',
            'movies' => 'nullable|array',
            'movies.*' => 'exists:movies,id'
        ]);

        // Crear l'actor
        $actor = Actor::create($validatedData);

        // Associar pel·lícules si n'hi ha
        if (!empty($validatedData['movies'])) {
            $actor->movies()->sync($validatedData['movies']);
        }

        // Redirigir a alguna ruta, per exemple, al llistat d'actors
        return redirect('/actors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
    
    public function getMovies(Request $request)
    {
        $searchTerm = $request->input('q', '');
    
        $movies = Movie::where('title', 'like', '%' . $searchTerm . '%')->get();
    
        return response()->json($movies);
    }
}
