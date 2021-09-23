@props(['name']) 

@if($errors->has($name))
    <p class="text-red-500 text-sm mt-2">{{ $errors->first($name) }}</p>
@endif