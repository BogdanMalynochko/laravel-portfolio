<x-layout>
    <div class="container">
        <x-heading class="center">Add Project</x-heading>
        <form class="max-w-3xl mx-auto" action="/admin/dashboard/projects" method="POST">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="description"/>
            <x-form.input name="link"/>

            <div class="mb-7">
                <label class="block mb-2 uppercase font-bold text-lg text-white" for="skill">Skill</label>
                <select class="p-4 w-full outline-yellow" name="skill" id="skill">
                    @php
                        $skills = \App\Models\Skill::all();
                    @endphp
    
                    @foreach ($skills as $skill)
                        <option class="mb-2 text-xl" value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>  
                @error('skill')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <x-form.button>Add</x-form.button>
        </form>
    </div>
</x-layout>