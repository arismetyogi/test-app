<x-layout>
    {{-- @slot('heading')
        About Page
    @endslot --}}
    <x-slot:heading>
        Jobs Experiences
    </x-slot:heading>   
    
    <h2>{{ $job['title'] }}</h2>
</x-layout>