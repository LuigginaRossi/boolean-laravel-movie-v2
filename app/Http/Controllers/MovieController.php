<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view("movies.index", compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors=Actor::all();
        return view("movies.create", compact("actors"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $movie= Movie::create([
            ...$data,
            "user_id"=> Auth::id()
        ]);
        $actors=Actor::all();

        if ($request->has("actors")){
            $movie->actors()->attach($data["actors"]);
        }
        return redirect()->route('movies.show',compact('movie',"actors"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        
        return view('movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $actors=Actor::all();
        return view('movies.edit',compact('movie',"actors"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $data=$request->all();
        $movie-> update($data);
        
        if ($request->has("actors")){
           $movie->actors()->sync($data["actors"]);
        }
        
        return redirect()->route('movies.show', compact("movie"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
