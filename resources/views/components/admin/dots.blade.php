@props(['name'])

<div class="hover:cursor-pointer" x-data="{ show: false }" @click="show = !show" @click.away="show = false">
    <svg class="absolute top-2 right-5" fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32.055 32.055" xml:space="preserve">
        <g>
            <path d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967 C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967 s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967 c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z"/>
        </g>
    </svg>

    <div class="admin-options gradient" x-show="show" style="display: none">
        <ul class="text-left flex flex-col gap-4">
            <x-admin.options-item href="/admin/dashboard/{{ $name->first()->getTable() }}">Show All {{ $name->first()->getTable() }}</x-admin.options-item>
            <x-admin.options-item href="/admin/dashboard/{{ $name->first()->getTable() }}/create">Add New {{ $name->first()->getTable() }}</x-admin.options-item>
        </ul>
    </div>
</div>
