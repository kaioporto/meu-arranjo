<x-layout title="Musics">
    <div class="mt-6 text-white">
        <h2 class="font-bold">Musics</h2>
        <ul class="mt-6">
            @foreach($musics as $music)
                <a href="/musics/{{ $music->id }}/edit"><li class="text-sm">{{ $music->title }} </li></a>
            @endforeach
        </ul>
    </div>
</x-layout>
