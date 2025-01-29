<x-layout>
<x-slot:heading>
Register
</x-slot:heading>

<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 max-w-md">
      <x-form-field class="sm:col-span-3">
       <x-form-label for="first_name">First name</x-form-label>

          <div class="mt-2">
          <x-form-input name="first_name" :value="old('first_name')" id="first_name" required/>
            <x-form-error name="first_name" />


</x-form-field> 

<!-- //------------------------------------------------ for the salary -->

<x-form-field class="sm:col-span-3">
       <x-form-label for="last_name">Last Name</x-form-label>
          <div class="mt-2">
          <x-form-input name="last_name"  :value="old('last_name')" id="last_name" required />

            <x-form-error name="last_name" />
</div>
</x-form-field>

<!-- //------------------------------------------------ for the email --> 


    
      <x-form-field class="sm:col-span-3">
       <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
          <x-form-input name="email" id="email"  :value="old('email')" type="email" required/>
            <x-form-error name="email" />
          </div>
</x-form-field>

<!-- //------------------------------------------------ for the password -->
<x-form-field class="sm:col-span-3">
       <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
          <x-form-input name="password" id="password" type="password" required/>
            <x-form-error name="password" />
          </div>
</x-form-field>

<!-- //------------------------------------------------ for the password confirmation -->
<x-form-field class="sm:col-span-3">
       <x-form-label for="password_confirmation">Confirm Password</x-form-label>
          <div class="mt-2">
          <x-form-input name="password_confirmation" id="password_confirmation" type="password" required />
            <x-form-error name="password_confirmation" />
          </div>
</x-form-field>
<!-- //------------------------------------------------ for the description -->
        </div>  
        </div>
</div>
</div>
    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
  <a href="/" class="text-sm font-semibold text-gray-900">Cancel</button>
   <x-form-button class="mr-40">Register</x-form-button>
  </div>
</form>
</x-layout>