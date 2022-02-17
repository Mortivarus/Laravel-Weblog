@props(['name', 'label']) 

<div class="flex flex-row gap-2">
    <div>
        <input
            class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="{{$name}}"
            {{ $attributes(['placeholder' => $label]) }}>
    </div>
    <div>
        <button class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-3 rounded leading-tight focus:outline-none focus:shadow-outline" type="submit">
            Click!
        </button>
    </div>
</div>
