@props(['name', 'label']) 

<x-form.label name="{{$label}}"/>

<textarea
    class="shadow appearance-none border padding-8 rounded w-full p-4 my-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    name="{{$name}}"
    >{{ $attributes['value'] }}
</textarea>

<x-form.error name="{{$name}}"/> 
