<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($jobs as $job)
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
                <p class="text-gray-600">{{ $job['description'] }}</p>
                <a href="/laravel-time/public/jobs/{{ $job['id'] }}" class="text-blue-500">View job</a>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $jobs->links() }} 
    </div>   
</x-layout>