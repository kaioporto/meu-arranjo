<x-layout title="Musics">
    <h2 class="text-base/7 font-semibold text-white">Edite as informações da música.</h2>
    <p class="mt-1 text-sm/6 text-gray-400">Mude como quiser as informações da música.</p>
    <form method="POST" action="/musics/{{ $music->id }}">
        @csrf
        @method('PATCH')
        <div class="sm:col-span-3">
            <label for="title" class="block text-sm/6 font-medium text-white">Título</label>
            <div class="mt-2">
                <input id="title" type="text" name="title" value="{{ $music->title }}" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="sm:col-span-3">
            <label for="artist" class="block text-sm/6 font-medium text-white">Artista</label>
            <div class="mt-2">
                <input id="artist" type="text" name="artist" value="{{ $music->artist }}" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="tone" class="block text-sm/6 font-medium text-white">Tom original</label>
            <div class="mt-2">
                <input id="tone" type="text" name="tone" maxlength="4" value="{{ $music->tone }}" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="col-span-full">
            <label for="lyrics" class="block text-sm/6 font-medium text-white">Letra.</label>
            <div class="mt-2">
                <textarea id="lyrics" name="lyrics" rows="20" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $music->lyrics }}</textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Escreva ou cole a música nova que você aprendeu e quer guardar.</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Atualizar
                </button>
                <button form="delete-music-form" type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Apagar
                </button>
            </div>
        </div>
    </form>
    <form id="delete-music-form" method="POST" action="/musics/{{ $music->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>