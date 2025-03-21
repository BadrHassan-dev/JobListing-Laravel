<x-layout>
    <x-slot name="heading">Create Jobs</x-slot>

<form method="POST" action="{{ route("jobs.store") }}">
    @csrf

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Job details</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Job Name" required>
                        </div>
                        @error('title')
                            <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="salary" id="salary"  placeholder="100000" required />
                        <x-form-error name="salary" />
                    </div>
                </x-form-field>

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Descreption</label>
                    <div class="mt-2">
                        <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
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
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <x-form-button type="submit">Save</x-form-button>
    </div>
</form>


</x-layout>