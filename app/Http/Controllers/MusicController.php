<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('musics.index', ['musics' => $musics]);
    }

    public function create()
    {
        return view('musics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'lyrics' => 'required|string',
            'tone' => 'required|string|max:4',
        ]);

        Music::create($validated);

        return redirect('/musics');
    }

    public function show(Music $music)
    {
        return view('musics.show', ['music' => $music]);
    }

    public function edit(Music $music)
    {
        return view('musics.edit', ['music' => $music]);
    }

    public function update(Request $request, Music $music)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'lyrics' => 'required|string',
            'tone' => 'required|string|max:4',
        ]);

        $music->update($validated);

        return redirect("/musics/{$music->id}");
    }

    public function destroy(Music $music)
    {
        $music->delete();
        return redirect('/musics');
    }
}
