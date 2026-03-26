@props(['name', 'label', 'type' => 'text', 'value' => ''])

@php
    $isTextarea = $type === 'textarea';
@endphp

<div class="mb-5 text-left">
    <label for="{{ $name }}" class="block text-gray-700 text-sm font-bold mb-2">
        {{ $label }}
    </label>
    
    @if($isTextarea)
        <textarea 
            name="{{ $name }}" 
            id="{{ $name }}" 
            rows="4"
            class="w-full px-4 py-2 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition shadow-sm @error($name) border-red-500 @enderror"
        >{{ old($name, $value) }}</textarea>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            value="{{ old($name, $value) }}"
            class="w-full px-4 py-2 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition shadow-sm @error($name) border-red-500 @enderror"
        >
    @endif

    @error($name)
        <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
    @enderror
</div>