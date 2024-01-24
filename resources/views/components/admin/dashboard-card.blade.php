@props(['name'])

@if ($name->count())
    <div class="bg-blue p-6 w-2/4 text-center relative">
        <h2 class="uppercase">{{ $name->first()->getTable() }}: {{ $name->count() }}</h2>
        <x-admin.dots :name=$name/>
    </div>
@endif
