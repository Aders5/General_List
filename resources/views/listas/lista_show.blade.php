
<x-layout>
    <x-slot:title>Tarea Seleccionada</x-slot:title>

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900">Tarea Seleccionada</h1>
    </div>

    <br><br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <x-task-card 
                :titulo="$lista->titulo" 
                :contenido="$lista->contenido" 
                :vigencia="$lista->vigencia" 
                :id="$lista->id"
            />
    </div>

    <div class="mt-8 flex gap-4">
    <a href="{{ route('listas.index') }}" 
       class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-xl transition">
        Volver al listado
    </a>

    <a href="{{ route('listas.edit', $lista->id) }}" 
       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-xl transition">
        Editar Tarea
    </a>

    <form action="{{ route('listas.destroy', $lista->id) }}" method="POST" onsubmit="return confirm('¿De verdad quieres borrar esto?')">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-xl transition">
            Eliminar Tarea
        </button>
    </form>
</div>
</x-layout>