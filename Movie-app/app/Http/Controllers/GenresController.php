<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function genres()
    {
        $genres = new Genres;
        $data = $genres->getAllGenres();

        return view('genres/genres', ['genres' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genres $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genres $genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genres $genres)
    {
        //
    }
}
