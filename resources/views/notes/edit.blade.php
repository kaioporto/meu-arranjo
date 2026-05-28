<x-layout title="Notes">
    <form method="POST" action="/notes/{{ $note->id }}">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="note" class="block text-sm/6 font-medium text-white">Editar anotação</label>
            <div class="mt-2">
                <textarea id="note" name="note" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $note->content }}</textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Edite a sua nota nova que você quer guardar.</p>
            <div class="mt-6 flex items-center gap-x-3">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Atualizar
                </button>
                <button form="delete-note-form" type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Apagar
                </button>
            </div>
        </div>
    </form>
    <form id="delete-note-form" method="POST" action="/notes/{{$note->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>


