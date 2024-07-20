<x-layout>
    {{-- @slot('heading')
        About Page
    @endslot --}}
    <x-slot:heading>
        Jobs Experiences
    </x-slot:heading>   
    
    @foreach ($jobs as $job)
        <li><a href="/exp/{{ $job['id'] }}">{{ $job['title'] }} on {{ $job['place'] }}</a></li>
    @endforeach
</x-layout>