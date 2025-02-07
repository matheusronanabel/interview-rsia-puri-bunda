@php
    $classes = 'p-4 hover:bg-blue-50 transition ease-in-out duration-300 block w-full rounded-lg hover:text-blue-900 font-medium text-sm tracking-[1px]';
@endphp


<a {{$attributes->merge(['class'=>$classes])}}>
    {{$slot}}
</a>