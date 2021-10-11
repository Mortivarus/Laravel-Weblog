@props(['name', 'label']) 

<x-form.label name="{{$label}}"/>

<input
    class="shadow appearance-none border rounded w-full py-2 px-3 my-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    name="{{$name}}"
    {{ $attributes(['value' => old($name)]) }}>

<x-form.error name="{{$name}}"/> 