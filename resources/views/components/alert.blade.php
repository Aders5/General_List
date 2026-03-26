@props(['type' => 'info'])

@php
    $colors = [
        'success' => 'bg-green-100 border-green-500 text-green-700',
        'error'   => 'bg-red-100 border-red-500 text-red-700',
        'info'    => 'bg-blue-100 border-blue-500 text-blue-700',
        'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-700',
    ][$type] ?? 'bg-gray-100 border-gray-500 text-gray-700';
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 mb-4 rounded shadow-sm $colors"]) }} role="alert">
    <p class="font-bold">{{ ucfirst($type) }}</p>
    <p>{{ $slot }}</p>
</div>