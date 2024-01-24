<x-layout>
    <div class="container">
        <div class="max-w-5xl flex gap-9 mx-auto">
            <x-admin.dashboard-card :name=$projects/>
            <x-admin.dashboard-card :name=$skills/>
        </div>
    </div>
</x-layout>