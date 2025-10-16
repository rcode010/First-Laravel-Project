<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job )

        <a href="/jobs/{{ $job['id'] }}" class=" hover:underline block">
            <div class="text-blue">
                {{ $job->employer->name }}
            </div>
            <di class="text-white">
                <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }}
            </div>
        </a>

        @endforeach
    <div>
        {{$jobs->links()}}
    </div>


    </div>
</x-layout>
