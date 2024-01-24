<x-layout>
    <section class="banner">
        <div class="container pt-28 pb-72">
            <div class="text-center">
                <h1 class="white">I design and build clean websites</h1>
                <p class="white max-w-[470px] mx-auto my-3">Write anything here something about yourself to showcase what actually you doing or targeting etc.</p>
                <x-button class="mx-auto mt-6">Hire me</x-button>
            </div>
        </div>
    </section>

    @if($skills->count())
        <section class="main-skills py-5 border-y border-y-grey">
            <div class="container">
                <div class="flex justify-between items-center">
                    @foreach ($skills as $index => $skill)
                        @if($index < 4)
                            <x-single-skill>{{ $skill->name }}</x-single-skill>
                        @endif
                    @endforeach
                </div>
                <x-button link="/skills" class="mx-auto mt-6">Show All Skills</x-button>
            </div>
        </section>
    @endif

    <section class="process py-24">
        <div class="container">
            <x-heading>My process to develop</x-heading>
            <div class="flex flex-col gap-20 max-w-[735px] relative">
                <div class="line absolute w-[1px] h-[660px] bg-white bg-opacity-35 left-6"></div>
                <x-single-process show_link='true' number="1" rotating="rotate-0"/>
                <x-single-process number="2" rotating="rotate-90"/>
                <x-single-process number="3" rotating="rotate-180"/>
            </div>
        </div>
    </section>

    <section class="projects py-8">
        <div class="container">
            <x-heading>Some Featured projects</x-heading>
            @if ($projects->count())
                <div class="pt-10 flex flex-col gap-10">
                    @foreach ($projects as $index => $project)
                        @if ($index < 3)
                            <x-project-card :index="$index" :project="$project"/>
                        @endif
                    @endforeach
                </div>
                <x-button link="/projects" class="mx-auto mt-6">Show All Projects</x-button>
            @endif
        </div>
    </section>

    <section class="testimonials py-8">
        <div class="container">
            <x-heading>Client testimonials</x-heading>
            @if ($testimonials -> count())
                <div class="grid grid-cols-2 gap-16">
                    @foreach ($testimonials as $testimonial)
                        <x-testimonial-card :testimonial="$testimonial"/>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section class="ideas pt-36 pb-24">
        <div class="container flex items-center justify-between">
            <div>
                <x-heading class="!pb-0">Have idea about project?</x-heading>
                <p class="py-8">Write anything here something about yourself to <br> showcase what actually you doing or targeting etc.</p>
                <x-button>Send me a message</x-button>
            </div>
            <div>
                <svg fill="none" height="393" viewBox="0 0 393 393" width="393" xmlns="http://www.w3.org/2000/svg"><g stroke="#404040"><path d="m354.5 392.021v-392.020908"/><path d="m274.5 392.021v-392.020908"/><path d="m195.5 392.021v-392.020908"/><path d="m0 290.5h392.02"/><path d="m0 203.5h392.02"/></g><path clip-rule="evenodd" d="m195.5 219c-.031-8.55-6.959-15.471-15.5-15.471 8.56 0 15.5-6.953 15.5-15.529.031 8.55 6.959 15.471 15.5 15.471-8.561 0-15.5 6.953-15.5 15.529z" fill="#fff" fill-rule="evenodd"/><path clip-rule="evenodd" d="m275.5 306c-.031-8.55-6.959-15.471-15.5-15.471 8.56 0 15.5-6.953 15.5-15.529.031 8.55 6.959 15.471 15.5 15.471-8.561 0-15.5 6.953-15.5 15.529z" fill="#fff" fill-rule="evenodd"/></svg>
            </div>
        </div>
    </section>
</x-layout>