<x-layout title="Musics">
    <div class="mb-6">
        <h2 class="text-base/7 font-semibold text-white">Novo registro de música</h2>
        <p class="text-sm/6 text-gray-400">Coloque aqui as informações da música da maneira que você aprendeu.</p>
    </div>
    <form method="POST" action="/musics">
        @csrf
        <div class="sm:col-span-3">
            <label for="title" class="block text-sm/6 font-medium text-white">Título</label>
            <div class="mt-3">
                <input id="title" type="text" name="title" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="sm:col-span-3">
            <label for="artist" class="block text-sm/6 font-medium text-white">Artista</label>
            <div class="mt-3">
                <input id="artist" type="text" name="artist" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="tone" class="block text-sm/6 font-medium text-white">Tom original</label>
            <div class="mt-3">
                <input id="tone" type="text" name="tone" maxlength="4" class="block max-w-16 rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
        </div>
        <div class="col-span-full">
            <label for="lyrics" class="block text-sm/6 font-medium text-white">Letra.</label>
            <div class="mt-2">
                <textarea id="lyrics" name="lyrics" rows="20" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Escreva ou cole a música nova que você aprendeu e quer guardar.</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Salvar</button>
            </div>
        </div>
    </form>
</x-layout>