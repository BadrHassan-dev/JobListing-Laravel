<x-layout>
    <x-slot name="heading">Edit Job: {{ $job->title }}</x-slot>

<form method="POST" action="/laravel-time/public/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" name="title" id="title" value="{{ $job->title }}" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Job Name" required>
                        </div>
                        @error('title')
                            <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" name="salary" id="salary" value="{{ $job->salary }}" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="100000" required>
                        </div>
                        @error('salary')
                            <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Descreption</label>
                    <div class="mt-2">
                        <textarea name="description" id="description" value="{{ $job->description }}" rows="3" class="test block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $job->description }}</textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences The Job.</p>
                    @error('description')
                        <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <!-- add delete button -->
        <button type="submit" form="delete-job" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
        <a href="/laravel-time/public/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
</form>

<form method="POST" action="/laravel-time/public/jobs/{{ $job->id }}" class="hidden" id="delete-job">
    @csrf
    @method('DELETE')
</form>

</x-layout>