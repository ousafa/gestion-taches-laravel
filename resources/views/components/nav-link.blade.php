@props(['active'=> false])
<a {{$attributes}} class="{{$active ? 'text-blue-500' : 'text-gray-700 hover:text-blue-600' }} py-5 px-3 text-sm font-medium">
    {{$slot}}
</a>
