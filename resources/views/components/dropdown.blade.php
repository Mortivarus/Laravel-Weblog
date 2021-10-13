@props(['label', 'items'])

<div class="relative flex lg:inline-flex items-center bg-gray-custom-3 rounded-xl">
    <div x-data="{ show:false }">
        <button @click="show = !show" class="py-1 pl-3 pr-12 text-white">{{$label}}</button>

        @if ($label === 'Authors')
            <div x-show="show">
                @foreach ($items->sortBy('name') as $item)
                    <a href="#" class="block text-white px-3 leading-5">{{ucwords($item->author->name)}}</a>
                @endforeach
            </div>
        @else
            <div x-show="show">
                @foreach ($items->sortBy('name') as $item)
                    <a href="#" class="block text-white px-3 leading-5">{{ucwords($item->name)}}</a>
                @endforeach
            </div>
        @endif
    </div>
</div>