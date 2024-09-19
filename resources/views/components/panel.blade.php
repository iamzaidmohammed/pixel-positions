@php
    $classes = 'p-4 rounded-xl bg-white/5 border border-transparent hover:border-blue-800 cursor-pointer transition-colors duration-300 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
