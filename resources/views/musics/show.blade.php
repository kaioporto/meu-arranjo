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

        <div class="mt-6">
            <div class="flex items-center gap-2 mb-4">
                <h3 class="text-lg font-bold">Notas de Aprendizado</h3>
                <span class="badge badge-primary badge-sm font-semibold">
                    {{ $music->notes->count() }}
                </span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @forelse($music->notes as $note)
                    <div class="card bg-base-200 border border-base-300 shadow-md hover:border-base-content/20 transition-all flex flex-col justify-between">
                        <div class="card-body p-4">
                            <p class="text-sm leading-relaxed whitespace-pre-line">
                                {{ $note->content }}
                            </p>
                            <div class="card-actions justify-between items-center mt-3 pt-3 border-t border-base-300">
                                <span class="text-xs text-base-content/60 flex items-center gap-1">
                                    {{ $note->created_at->format('d/m/Y H:i') }}
                                </span>
                                <form method="POST" action="{{ route('notes.destroy', $note->id) }}" onsubmit="return confirm('Deseja realmente excluir esta nota?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-ghost btn-xs text-error hover:bg-error/10" title="Excluir nota">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full alert bg-base-200 border border-base-300 shadow-sm">
                        <span class="text-sm">Nenhuma nota de aprendizado registrada para esta música ainda.</span>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="col-span-6 mt-3">
            <form method="POST" action="{{ route('notes.store', $music->id) }}">
                @csrf
                <div class="form-control w-full">
                    <label for="content" class="label">
                        <span class="label-text font-semibold">Adicionar nova nota:</span>
                    </label>
                    <textarea
                            id="content"
                            name="content"
                            rows="3"
                            class="textarea textarea-bordered w-full @error('content') textarea-error @enderror"
                            placeholder="Ex: O compasso 4 usa uma pestana difícil, focar no dedilhado..."
                            required
                    >{{old('content')}}</textarea>

                    @error('content')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                    @enderror
                    <div class="mt-6 flex justify-end">
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
