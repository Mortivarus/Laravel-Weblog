@props(['label', 'items'])

<div class="relative flex lg:inline-flex items-center bg-gray-custom-1 rounded-xl w-40">
    <div x-data="{ show:false }">
        <button @click="show = !show" class="text-white px-10">{{$label}}</button>
            <div x-show="show"  class="absolute bg-gray-custom-3 w-full rounded-xl" style="display:none">
                @foreach ($items->sortBy('name') as $item)
                    <div class="flex flex-row leading-7">
                        <div class="block text-white text-left pb-2 px-2">
                            <input type="checkbox" name="{{$label}}[]" value="{{$item->name}}" class="form-checkbox">
                        </div>
                        <div class="block text-white text-left pb-2">
                            {{ucwords($item->name)}}
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>