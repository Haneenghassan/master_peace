<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- <div class="mt-4">
            <x-input-label for="user_name" :value="__('User Name')" />

            <x-text-input id="user_name" class="block mt-1 w-full"
                            type="text"
                            name="user_name" required />
        </div>

        <div class="mt-4">
            <x-input-label for="photo" :value="__('Photo')" />

            <x-text-input id="photo" class="block mt-1 w-full"
                            type="file"
                            name="photo" required />
        </div>

        <div class="mt-4">
            <x-input-label for="mobile" :value="__('mobile')" />

            <x-text-input id="mobile" class="block mt-1 w-full"
                            type="text"
                            name="mobile" required />
        </div> --}}

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="Role As" :value="__('Role As')"/>
            <select name="is_admin" class="form-control">
          
                <option value="2" >preschool</option>
                <option value="3" >babysitter</option>
                <option value="0">Service recipient</option>
                <option value="1" >Admin</option>
             
            </select>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>

          
                
         
        </div>
    </form>
</x-guest-layout>
