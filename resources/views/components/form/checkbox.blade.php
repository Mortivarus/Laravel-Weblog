@props(['name', 'label']) 

<x-form.label name="{{$label}}"/>

<input type="checkbox"
class="h-4 w-4 mb-5 ml-3" 
name="{{$name}}" 
id="{{$name}}">

<x-form.error name="{{$name}}"/> 