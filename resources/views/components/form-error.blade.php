@props(['name'])
@error($name)
    <p class="text-red-900 mt-2">{{ $message }}</p>
@enderror