@props(['route', 'name'])

<div class="{{ Request::url() === route($route) ? 'bg-blue-700 rounded-xl leading-10' : 'leading-10' }}">
    <a href="{{route($route)}}" title="" class="text-white text-base uppercase p-3">{{$name}}</a></div>