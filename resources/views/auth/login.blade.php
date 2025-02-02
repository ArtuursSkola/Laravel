<x-layout>
<x-slot:heading>
    <div class="flex items-center justify-center">
        Log in
    </div>
</x-slot:heading>


    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 max-w-md mx-auto">
                <div class="grid grid-cols-1 gap-y-8">
                    <!-- Email Field -->
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" :value="old('email')" type="email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <!-- Password Field -->
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6 max-w-md mx-auto">
            <!-- Cancel Button -->
            <a href="/" class="text-sm font-semibold text-gray-900">Cancel</a>

            <!-- Log in Button -->
            <x-form-button>Log in</x-form-button>
        </div>
    </form>
</x-layout>
