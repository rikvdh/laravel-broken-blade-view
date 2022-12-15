@php($hello = 'welcome')
@php
    $hello = 'goodbye';
@endphp

{{ $hello }}
