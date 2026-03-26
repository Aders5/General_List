<x-layout>
    <x-slot:title>Editar Tarea</x-slot:title>

    <h1 class="text-2xl font-bold mb-4">Editar Tarea</h1>
    
    @if (session('info'))
        <x-alert type="success">{{ session('info') }}</x-alert>
    @endif

    <form action="{{ route('listas.update', $lista) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <x-form-field 
            name="titulo" 
            label="Título de la tarea" 
            :value="$lista->titulo" 
        />
        
        <x-form-field 
            name="contenido" 
            label="Puntos a considerar" 
            type="textarea"
            :value="$lista->contenido" 
        />
        
        <x-form-field 
            name="vigencia" 
            label="Vigencia" 
            type="date" 
            :value="\Carbon\Carbon::parse($lista->vigencia)->format('Y-m-d')" 
        />

        <div class="flex gap-2">
            <x-button>Actualizar tarea</x-button>
            <a href="{{ route('listas.index') }}" class="px-4 py-2 bg-gray-200 rounded-lg text-gray-700 font-bold">Cancelar</a>
        </div>

    </form>
</x-layout>