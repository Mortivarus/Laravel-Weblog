@props(['name', 'collection', 'label']) 

<x-form.label name="{{$label}}"/>

<select name="{{$name}}" id="{{$name}}" class="shadow appearance-none border bg-white rounded w-full py-2 px-3 my-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @foreach ($collection as $item)
        <option value="{{$item->id}}">{{ucwords($item->name)}}</option>
    @endforeach
</select>
