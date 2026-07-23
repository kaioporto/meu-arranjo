<x-layout title="Musics">
    <div class="mt-6">
        <h2 class="text-2xl font-bold">{{ $music->title }}</h2>
        <h3 class="text-lg font-bold"> {{ $music->artist }}</h3>
        <p class="font-bold mt-6">Tom:</p>
        <p class="text-sm/6">{{ $music->tone }}</p>

        <div class="mt-6">
            <h3 class="font-bold">Letra </h3>
            <p class="mt-3">{{ $music->lyrics }}</p>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <a
                    href="/musics/{{ $music->id }}/edit"
                    class="btn btn-neutral">
                Editar
            </a>
        </div>

        <h3 class="text-lg font-bold mt-3">Notas de aprendizado </h3>
        <div class="notes-list col-span-6 mt-3">
            @forelse($music->notes as $note)
                <div class="card mb-2">
                    <div class="card-body">
                        <p>{{ e($note->content) }}</p>
                        <small class="text-muted">Adicionado em {{ $note->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                </div>
            @empty
                <p>Nenhuma nota de aprendizado registrada para esta música ainda.</p>
            @endforelse
        </div>
        <div class="col-span-6 mt-3">
            <form method="POST" action="{{ route('notes.store', $music->id) }}">
                @csrf
                <div class="col-span-full">
                    <label for="content" class="block text-sm/6 font-medium">Adicionar nova nota:</label>
                    <div class="mt-2">
                        <textarea
                                id="content"
                                name="content"
                                rows="3"
                                class="block w-full rounded-md px-3 py-1.5"
                                placeholder="Ex: O compasso 4 usa uma pestana difícil, focar no dedilhado..."
                                required></textarea>
                    </div>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="mt-6 flex items-center gap-x-6">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>
