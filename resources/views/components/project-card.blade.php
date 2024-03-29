@props(['project'])

<div class="flex gap-20 py-14 px-20 bg-dark_second">
    <div class="w-[550px] h-[550px] gradient"></div>
    <div class="flex flex-col justify-center gap-9">
        <div class="project-number-circle">
            <span class="gradient">{{ $project->id }}</span>
        </div>
        <h2 class="bold"><a class="project-link" href="{{ $project->link }}">{{ $project->name }}</a></h2>
        <div class="flex flex-col">
            <h3 class="white">
                Skills I used in this project: 
                @foreach ($project->skills as $skill)
                    <span class="underline">{{ $skill->name }}</span>
                @endforeach
            </h3>
        </div>
    </div>
</div>