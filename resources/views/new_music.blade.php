<x-layout title="Musics">
    <form method="POST" action="/musics">
        <div class="col-span-full">
            @csrf
            <label for="music" class="block text-sm/6 font-medium text-white">New Music</label>
            <div class="mt-2">
                <textarea id="music" name="music" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Escreva a música nova que você quer guardar.</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Salvar</button>
            </div>
        </div>
    </form>
    <div class="mt-6 text-white">
        <h2 class="font-bold">Musgoes</h2>
        <ul class="mt-6">
            @foreach($musics as $music)
                <li class="text-sm">{{ $music }} </li>
            @endforeach
        </ul>
    </div>
</x-layout>