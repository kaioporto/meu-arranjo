<x-layout title="Musics">
    <div class="mt-6 text-white">
        <h2 class="font-bold">Musics</h2>
        <ul class="mt-6">
            @foreach($musics as $music)
                <a href="/musics/{{ $music->id }}"><li class="text-sm">{{ $music->title }} </li></a>
            @endforeach
        </ul>
    </div>
    <div class="mt-6">
        <a
                href="/musics/create"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Adicionar nova
        </a>
    </div>
</x-layout>
