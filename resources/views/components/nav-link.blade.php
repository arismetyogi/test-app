{{-- agar laravel tidak menganggap active sebagai attribut --}}
@props(['active' => false, 'type' => 'a']) 
{{-- pass props dan attributes dari anchor tag (href ke dalam sini) --}}
<a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="{{ $active ? 'page' : 'false' }}" 
{{ $attributes }}
>{{ $slot }} </a>    

{{-- anchor or button toggle by passing type props --}}

{{-- @if ($type === 'a') --}}
{{-- pass props dan attributes dari anchor tag (href ke dalam sini) --}}
{{-- <a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="{{ $active ? 'page' : 'false' }}"  --}}
{{-- {{ $attributes }} --}}
{{-- >{{ $slot }} </a>     --}}
{{-- @else --}}
    {{-- <button class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="{{ $active ? 'page' : 'false' }}"  --}}
    {{-- {{ $attributes }} --}}
    {{-- >{{ $slot }} </button> --}}
{{-- @endif --}}