<x-layout>
    {{-- @slot('heading')
        Home Page
    @endslot --}}
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    
    <h1>{{ $greeting }} from the Home Page. My name is {{ $name }}</h1>

</x-layout>