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
                class="btn btn-active btn-primary">
            Adicionar nova
        </a>
    </div>
</x-layout>
