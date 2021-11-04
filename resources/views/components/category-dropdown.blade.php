<div class="relative flex lg:inline-flex items-center bg-gray-custom-1 rounded-xl w-40 my-2">
    <div x-data="{ show:false }">
        <button @click="show = !show" class="text-white px-10">Categories</button>
            <div x-show="show"  class="absolute bg-gray-custom-3 w-full rounded-xl" style="display:none">
                @foreach ($categories->sortBy('name') as $item)
                    <div class="flex flex-row leading-7">
                        <div>
                            <a href="/categories/{{$item->id}}" class="block text-white text-left pb-1 pl-3">
                                {{ucwords($item->name)}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>