<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Middle Name -->
        <div class="mt-4">
            <x-input-label for="middle_name" :value="__('Middle Name')" />
            <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" />
            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Date of Birth -->
        <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <!-- Place of Birth -->
        <div class="mt-4">
            <x-input-label for="place_of_birth" :value="__('Place of Birth')" />
            <x-text-input id="place_of_birth" class="block mt-1 w-full" type="text" name="place_of_birth" :value="old('place_of_birth')" required />
            <x-input-error :messages="$errors->get('place_of_birth')" class="mt-2" />
        </div>

        <!-- Sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('Sex')" />
            <select id="sex" name="sex" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('sex') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>

        <!-- Citizenship -->
        <div class="mt-4">
            <x-input-label for="citizenship" :value="__('Citizenship')" />
            <x-text-input id="citizenship" class="block mt-1 w-full" type="text" name="citizenship" :value="old('citizenship')" required />
            <x-input-error :messages="$errors->get('citizenship')" class="mt-2" />
        </div>

        <!-- Contact Number -->
        <div class="mt-4">
            <x-input-label for="contact_number" :value="__('Contact Number')" />
            <x-text-input id="contact_number" class="block mt-1 w-full" type="text" name="contact_number" :value="old('contact_number')" required />
            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
        </div>

        <!-- Existing Policy -->
        <div class="mt-4 flex items-center">
            <input type="checkbox" id="has_existing_policy" name="has_existing_policy" class="rounded border-gray-300 shadow-sm focus:ring-indigo-500" value="1" {{ old('has_existing_policy') ? 'checked' : '' }}>
            <label for="has_existing_policy" class="ml-2 text-sm text-gray-600">{{ __('Do you have an existing policy?') }}</label>
        </div>

        <!-- Interested Policies -->
        <div class="mt-4">
            <x-input-label for="interested_policies" :value="__('Interested Policies')" />
            <select id="interested_policies" name="interested_policies[]" multiple class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="life">Life Insurance</option>
                <option value="health">Health Insurance</option>
                <option value="auto">Auto Insurance</option>
            </select>
            <x-input-error :messages="$errors->get('interested_policies')" class="mt-2" />
        </div>

        <!-- Wants Representative -->
        <div class="mt-4 flex items-center">
            <input type="checkbox" id="wants_representative" name="wants_representative" class="rounded border-gray-300 shadow-sm focus:ring-indigo-500" value="1" {{ old('wants_representative') ? 'checked' : '' }}>
            <label for="wants_representative" class="ml-2 text-sm text-gray-600">{{ __('Would you like a representative?') }}</label>
        </div>

        <!-- Preferred Branch -->
        <div class="mt-4">
            <x-input-label for="preferred_branch" :value="__('Preferred Branch')" />
            <x-text-input id="preferred_branch" class="block mt-1 w-full" type="text" name="preferred_branch" :value="old('preferred_branch')" required />
            <x-input-error :messages="$errors->get('preferred_branch')" class="mt-2" />
        </div>

        <!-- Preferred Contact Methods -->
        <div class="mt-4">
            <x-input-label for="preferred_contact_methods" :value="__('Preferred Contact Methods')" />
            <select id="preferred_contact_methods" name="preferred_contact_methods[]" multiple class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                <option value="sms">SMS</option>
            </select>
            <x-input-error :messages="$errors->get('preferred_contact_methods')" class="mt-2" />
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
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
