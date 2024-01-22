<x-layout>
    @if ($skills->count())
        <div class="container">
            <x-heading class="center">All Skills</x-heading>
            <ul class="skills-list">
                @foreach ($skills as $skill)
                    <li class="white">{{ $skill->name }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>