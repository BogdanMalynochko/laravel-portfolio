<x-layout>
    @if ($projects->count())
        <div class="container" id="projects-container">
            <x-heading class="center">All Projects</x-heading>
            <div class="pt-10 flex flex-col gap-10">
                @foreach ($projects as $index => $project)
                        <x-project-card :project="$project"/>
                @endforeach
            </div>
            <div id="pagination">
                {{ $projects->links() }}
            </div>
        </div>
    @endif
</x-layout>