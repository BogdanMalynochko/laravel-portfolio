<x-layout>
    <div class="container">
        @if ($projects->count())
            <ul role="list" class="pb-14">
                @foreach ($projects as $project)
                    <li class="flex justify-between gap-x-6 pt-5 pb-10">
                        <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-xl font-semibold leading-6 text-white">{{ $project->name }}</p>
                        </div>
                        </div>
                    </li>
                    <div class="flex justify-between w-full border-b-2 pb-4">
                        <div class="flex flex-col gap-2">
                            <form method="POST" action="/admin/dashboard/projects/{{ $project->name }}">
                                @csrf
                                @method('DELETE')
                                <button class="form-btn admin btn" type="submit">Delete project</button>
                            </form>
                        </div>
                        <div class="sm:flex sm:flex-col sm:items-end">
                            <p class="mt-1 text-lg leading-5 text-gray-500">Added: <time datetime="2023-01-23T13:23Z">{{ $project->created_at->diffForHumans(); }}</time></p>
                        </div>
                    </div>
                @endforeach
            </ul>

            <a href="/admin/dashboard/" class="text-white text-xl hover:underline">Back</a>
        @endif
    </div>
</x-layout>