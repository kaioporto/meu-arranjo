<x-layout title="Notes">
    <div class="mt-6 text-white">
        <h2 class="font-bold">Notas</h2>
        <ul class="mt-6">
            @foreach($notes as $note)
                <a href="/notes/{{ $note->id }}/edit"><li class="text-sm">{{ $note->content }} </li></a>
            @endforeach
        </ul>
    </div>
</x-layout>


