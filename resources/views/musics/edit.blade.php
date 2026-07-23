<x-layout title="Editar música">
    <div class="max-w-2xl mx-auto mt-6">
        <div class="card bg-base-200 shadow-xl border border-base-300">
            <div class="card-body">
                <div class="mb-4">
                    <h2 class="card-title text-2xl font-bold">Edite a música</h2>
                    <p class="text-sm">Mude as informações da música como quiser.</p>
                </div>
                <form method="POST" action="/musics/{{ $music->id }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-control w-full">
                        <label for="title" class="label">
                            <span class="label-text font-semibold">Título</span>
                        </label>
                        <input
                                id="title"
                                type="text"
                                name="title"
                                value="{{ old('title', $music->title) }}"
                                class="input input-bordered w-full @error('title') input-error @enderror"
                        />
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div class="form-control w-full md:col-span-2">
                            <label for="artist" class="label">
                                <span class="label-text font-semibold">Artista</span>
                            </label>
                            <input
                                    id="artist"
                                    type="text"
                                    name="artist"
                                    value="{{ old('artist', $music->artist) }}"
                                    class="input input-bordered w-full @error('artist') input-error @enderror"
                            />
                            @error('artist')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                            @enderror
                        </div>
                        <div class="form-control w-full">
                            <label for="tone" class="label">
                                <span class="label-text font-semibold">Tom original</span>
                            </label>
                            <input
                                    id="tone"
                                    type="text"
                                    name="tone"
                                    maxlength="4"
                                    value="{{ old('tone', $music->tone) }}"
                                    class="input input-bordered w-full @error('tone') input-error @enderror"
                            />
                            @error('tone')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-control w-full mt-4">
                        <label for="lyrics" class="label">
                            <span class="label-text font-semibold">Letra</span>
                        </label>
                        <textarea
                                id="lyrics"
                                name="lyrics"
                                rows="20"
                                placeholder="Cole a letra aqui..."
                                class="textarea textarea-bordered h-48 w-full @error('lyrics') input-error @enderror"
                        >{{ old('lyrics', $music->lyrics) }}
                        </textarea>
                        @error('lyrics')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="card-actions justify-end mt-6 gap-2">
                        <a href="/musics" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="submit" form="delete-music-form" class="btn btn-error">Apagar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form id="delete-music-form" method="POST" action="/musics/{{ $music->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>