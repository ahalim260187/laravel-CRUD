<x-layout>
    <x-slot:heading>
        Register
    </x-slot>
    <form method="post" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Register New User</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-label for="first_name">First Name</x-label>
                        <x-input-form type="text" name="first_name" id="first_name" placeholder="John" :value="old('first_name')"
                            required />
                        <x-error-input name="first_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="last_name">Last Name</x-label>
                        <x-input-form type="text" name="last_name" id="last_name" :value="old('last_name')" placeholder="Doe"
                            required />
                        <x-error-input name="last_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="email">Email</x-label>
                        <x-input-form type="email" name="email" id="email" :value="old('email')"
                            placeholder="john@gmail.com" required />
                        <x-error-input name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="password">Password</x-label>
                        <div class="mt-2">
                            <x-input-form id="password" name="password" type="password" required />
                        </div>
                        <x-error-input name="password" />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="password_confirmation">Confirm Password</x-label>
                        <div class="mt-2">
                            <x-input-form id="password_confirmation" name="password_confirmation" type="password"
                                required />
                        </div>
                        <x-error-input name="password_confirmation" />
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
