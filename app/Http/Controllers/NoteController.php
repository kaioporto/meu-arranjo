<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Music;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Music $music)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $music->notes()->create($validated);
        return back()->with('success', 'Note adicionada!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $validated = $request->validate(['content' => 'required|string']);
        $note->update($validated);

        return redirect()->route('musics.show', $note->music_id)
                        ->with('success', 'Nota atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return back()->with('success', 'Nota removida!');
    }
}
