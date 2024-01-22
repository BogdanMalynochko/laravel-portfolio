@foreach($projects as $project)
    <div class="pt-10 flex flex-col gap-10" id="projects-container">
        <x-project-card :project="$project"/>
    </div>
@endforeach

<div id="pagination">
    {{ $projects->links() }}
</div>