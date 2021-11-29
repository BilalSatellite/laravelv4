
@props(['size'])
<i {!! $attributes->merge(['class' => 'bi']) !!}style="font-size: {{ $size ?? '1.5rem' }};"></i>
