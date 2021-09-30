@props(['route', 'name'])

<div class="{{ Request::url() === route($route) ? 'bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 rounded-full focus:outline-none focus:shadow-outline' : '' }}">
    <a href="{{route($route)}}" title="">{{$name}}</a>></div>