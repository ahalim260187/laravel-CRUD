<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot>
    <form method="post" action="{{ route('update-job', $job->id) }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit Job With Save to the Database</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Job Name</label>
                        <div class="mt-2">
                            <input type="text" name="job_name" id="job_name" autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                placeholder="Programming" value="{{ $job->name }}" required>
                        </div>
                        @error('job_name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input id="salary" name="salary" type="text" autocomplete="salary"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                placeholder="$50.000 per year" value="{{ $job->salary }}" required>
                        </div>
                        @error('salary')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <x-action-button type="submit" color="purple">
            Save
        </x-action-button>
    </form>
    <form action="{{ route('delete-job', $job->id) }}" method="POST" class="mt-6">
            @csrf
            @method('DELETE')
            <x-action-button type="button" href="{{ route('delete-job', $job->id) }}" color="red"
                             onclick="return confirm('Are you sure you want to delete this job?');">
                Delete
            </x-action-button>
        </form>
</x-layout>
