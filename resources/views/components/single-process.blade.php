@props(['number', 'rotating', 'show_link' => 'false'])

<div class="flex gap-20">
    <div class="rounded-full relative bg-portfolio-black text-white px-5 py-3 h-max border-white border">
        @isset($number)
            {{ $number }}
        @endisset
    </div>
    <div class="flex flex-col gap-4">
        <x-process-icon class="{{ $rotating }}"/>
        <h3>Step 1: Product design Research</h3>
        <p class="opacity-80 leading-7">This initial step involves a systematic and thorough exploration of the market landscape, user needs, and existing solutions.</p>
        @if ($show_link === 'true')
            <x-button link="/" class="transparent">See Examples</x-button>
        @endif
    </div>
</div>