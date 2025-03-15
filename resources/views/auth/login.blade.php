<x-layout>
    <x-slot:heading>
        Log In
    </x-slot>
    @if (session('error'))
        <div class="bg-green-100 text-green-700 p-4 rounded">
            {{ session('error') }}
        </div>
    @endif
    <form method="post" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Log In User</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-label for="email">Email</x-label>
                        <x-input-form type="email" name="email" id="email" placeholder="john@gmail.com"
                            :value="old('email')" required />
                        <x-error-input name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="password">Password</x-label>
                        <div class="mt-2">
                            <x-input-form id="password" name="password" type="password" required />
                        </div>
                        <x-error-input name="password" />
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
