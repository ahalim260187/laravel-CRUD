{{-- @props(['color' => 'purple'])
<a
    {{ $attributes->merge(['class' => 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}>
    {{ $slot }}
</a> --}}


@props(['color' => 'purple', 'type' => 'a'])
@php
    $bgColor = match ($color) {
        'red' => 'bg-red-600 hover:bg-red-500 focus-visible:outline-red-600',
        'purple' => 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600',
        default => 'bg-purple-600 hover:bg-purple-500 focus-visible:outline-purple-600',
    };
@endphp
@if ($type === 'a')
    <a
        {{ $attributes->merge(['class' => "rounded-md px-4 py-2 text-sm font-semibold text-white shadow-xs $bgColor focus-visible:outline-2 focus-visible:outline-offset-2"]) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => "rounded-md px-4 py-2 text-sm font-semibold text-white shadow-xs $bgColor focus-visible:outline-2 focus-visible:outline-offset-2"]) }}>{{ $slot }}
    </button>
@endif
