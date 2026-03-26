<div>

@props(['titulo', 'contenido', 'vigencia', 'id']) 

<div class="bg-blue-600 rounded-3xl p-8 shadow-2xl border-2 border-blue-400 max-w-sm">
    <h3 class="text-3xl font-black text-white mb-2 hover:text-blue-200 transition-colors">
        <a href="{{ route('listas.show', $id) }}">
            {{ $titulo }}
        </a>
    </h3>
    
    <p class="text-white italic text-lg mb-6 opacity-90">
        {{ $contenido }}
    </p>

    <div class="flex flex-col">
        <span class="text-xs font-bold text-blue-200 uppercase tracking-widest">Fecha Límite</span>
        <span class="text-xl font-mono text-white">
            {{ \Carbon\Carbon::parse($vigencia)->format('Y-m-d') }}
        </span>
    </div>
</div>

</div>
