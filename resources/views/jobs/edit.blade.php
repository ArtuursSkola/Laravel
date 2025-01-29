<x-layout>
<x-slot:heading>
    Edit Job: {{ $job->title }}
</x-slot:heading>

<form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <!-- Title Field -->
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="block w-full py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm"
                                placeholder="Shift Leader" 
                                value="{{ $job->title }}" 
                                required>
                        </div>
                        @error('title')
                            <p class="text-xs text-red-500 font-semibold"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Salary Field -->
                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input 
                                type="text" 
                                name="salary" 
                                id="salary" 
                                class="block w-full py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm"
                                placeholder="$50,000 Per Year" 
                                value="{{ $job->salary }}" 
                                required>
                        </div>
                        @error('salary')
                            <p class="text-xs text-red-500 font-semibold"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <!-- Delete Button -->
        <div class="flex items-center">
            <button 
                type="submit" 
                form="delete-form" 
                class="text-red-500 text-sm font-bold">
                Delete
            </button>
        </div>

        <!-- Cancel and Update Buttons -->
        <div class="flex items-center gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold text-gray-900">
                Cancel
            </a>
            <button 
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Update
            </button>
        </div>
    </div>
</form>

<!-- Hidden Delete Form -->
<form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>
</x-layout>
