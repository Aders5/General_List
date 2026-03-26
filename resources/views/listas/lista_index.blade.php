
<x-layout>
    <x-slot:title>Lista de tareas</x-slot:title>

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900">Lista de tareas</h1>
        <br><br>
        <a href="{{ route('listas.create') }}" class="text-blue-600 hover:underline">
            + Añadir tarea
        </a>
    </div>

    <br><br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($listas as $lista)
            <x-task-card 
                :titulo="$lista->titulo" 
                :contenido="$lista->contenido" 
                :vigencia="$lista->vigencia" 
                :id="$lista->id"
            />
        @endforeach
    </div>
</x-layout>