@props(['name', 'type' => 'text'])

<div class="mb-7">
    <label class="block mb-2 uppercase font-bold text-lg text-white" for="{{ $name }}">{{ $name }}</label>
    <input value="{{ old($name) }}" class="outline-yellow border border-gray-300 p-4 w-full" name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" required>
    @error($name)
        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>