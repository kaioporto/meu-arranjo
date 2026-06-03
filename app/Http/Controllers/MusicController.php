<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::all();
        return view('musics.index', ['musics' => $musics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Music::create([
            'title' => $request->title,
            'lyrics' => $request->lyrics,
            'artist' => $request->artist,
            'tone' => $request->tone,
        ]);

        return redirect('/musics');
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return view('musics.show', ['music' => $music]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        return view('musics.edit', ['music' => $music]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Music $music)
    {
        $music->update([
            'title' => $request->title,
            'lyrics' => $request->lyrics,
            'artist' => $request->artist,
            'tone' => $request->tone
        ]);

        return redirect("/musics/{$music->id}" );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return redirect('/musics');
    }
}
