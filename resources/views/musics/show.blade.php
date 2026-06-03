<x-layout title="Musics">
    <div class="mt-6 text-white">
        <h2 class="font-bold">{{ $music->title }}</h2>
        <div class="sm:col-span-3">
            <h3 class="font-bold"> {{ $music->artist }}</h3>
        </div>
        <div class="sm:col-span-3">
            <p class="mt-3 text-sm/6 text-gray-800"> Tom: {{ $music->tone }}<p/>
        </div>
        <div class="mt-6">
            <h3 class="font-bold">Letra </h3>
            <p>{{ $music->lyrics }}</p>
        </div>
    </div>

</x-layout>
