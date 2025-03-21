<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot>
    <form method="post" action="/job">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create Job With Save to the Database</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-label for="job_name">Job Name</x-label>
                        <x-input-form type="text" name="job_name" id="job_name" placeholder="Programming" required />
                        <x-error-input name="job_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="salary">Salary</x-label>
                        <div class="mt-2">
                            <x-input-form id="salary" name="salary" type="text" placeholder="$50.000 per year"
                                required />
                        </div>
                        <x-error-input name="salary" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
