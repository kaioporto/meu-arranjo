<x-layout title="Musics">
    <div class="mt-6">
        <h2 class="font-bold">Musics</h2>
        <ul class="mt-6">
            @foreach($musics as $music)
                <li class="text-sm">
                    <a href="/musics/{{ $music->id }}">{{ $music->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="mt-6">
        <a href="/musics/create" class="btn btn-primary">Adicionar nova</a>
    </div>
</x-layout>
