@props(['link' => "#"])

<a href="{{ $link }}" {{ $attributes(['class' => 'btn']) }}>{{ $slot }}</a>