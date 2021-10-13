@props(['label', 'items'])

<div class="relative flex lg:inline-flex items-center bg-gray-custom-1 rounded-xl w-32">
    <div x-data="{ show:false }">
        <button @click="show = !show" class="text-white pl-3">{{$label}}</button>

        @if ($label === 'Authors')
            <div x-show="show"  class="absolute bg-gray-custom-3 w-full rounded-xl" style="display:none">
                @foreach ($items->sortBy('name') as $item)
                    <a href="#" class="block text-white text-left pb-2 px-3 leading-5 w-35">{{ucwords($item->author->name)}}</a>
                @endforeach
            </div>
        @else
            <div x-show="show"  class="absolute bg-gray-custom-1 w-full rounded-xl" style="display:none">
                @foreach ($items->sortBy('name') as $item)
                    <a href="#" class="block text-white text-left pb-2 px-3 leading-5 w-35">{{ucwords($item->name)}}</a>
                @endforeach
            </div>
        @endif
    </div>
</div>