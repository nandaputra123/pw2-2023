<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\Genres;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
            
        ]);

        Movie::create($validateData);
        return redirect('/movies')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genres::all();
        return view('movies.edit', compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
            
        ]);

        $movie->update($validateData);
        return redirect('/movies')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Data Berhasil dihapus');
    }
}
