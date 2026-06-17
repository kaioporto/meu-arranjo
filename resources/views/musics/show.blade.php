<x-layout title="Musics">
    <div class="mt-6 text-white">
        <h2 class="font-bold">{{ $music->title }}</h2>
        <div class="sm:col-span-3">
            <h3 class="font-bold"> {{ $music->artist }}</h3>
        </div>
        <div class="sm:col-span-3 mt-3">
            <h3 class="font-bold">Tom:</h3>
            <p class="text-sm/6 text-white">{{ $music->tone }}<p/>
        </div>
        <div class="mt-6">
            <h3 class="font-bold">Letra </h3>
            <p>{{ $music->lyrics }}</p>
        </div>

        <h3 class="font-bold">Notas de aprendizado </h3>
        <div class="notes-list col-span-6 mt-3">
            @forelse($music->notes as $note)
                <div class="card mb-2">
                    <div class="card-body">
                        <p>{{ $note->content }}</p>
                        <small class="text-muted">Adicionado em {{ $note->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                </div>
            @empty
                <p>Nenhuma nota de aprendizado registrada para esta música ainda.</p>
            @endforelse
        </div>
        <div class="col-span-6 mt-3">
            <form action="{{ route('notes.store', $music->id) }}" method="POST">
                @csrf
                <div class="col-span-full">
                    <label for="nota">Adicionar nova nota:</label>
                    <textarea name="nota" id="nota" rows="3" class="form-control" required></textarea>
                    @error('nota')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Salvar Nota</button>
            </form>
        </div>
    </div>

</x-layout>
