<x-layout>
    <x-slot name="heading">Jobs</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold"> {{ $job->title }}</h2>
            <p class="text-gray-600">Description: {{ $job->description }}</p>
            <p class="text-gray-600">Salary: {{ $job->salary }}EGP</p>
        </div>
         
    </div>
    <p class="mt-6">
        <x-button href="/laravel-time/public/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>