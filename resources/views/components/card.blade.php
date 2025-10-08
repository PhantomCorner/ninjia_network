@props(['highlight' => false, 'var' => ''])

{{-- if received highlight prop as true, add highlighted class --}}
<div @class(['highlighted' => $highlight, 'card'])>
    {{ $slot }}

    {{ $var }}
    {{-- <a {{ $attributes }} class="btn">View Details</a> --}}
    <a href='{{ $attributes->get('href') }}' class="btn">View Details</a>
</div>
