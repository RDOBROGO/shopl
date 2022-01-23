<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Imie*')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Surname -->
            <div class="mt-4">
                <x-label for="surname" :value="__('Nazwisko')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')"/>
            </div>

            <!-- PhoneNumber -->
            <div class="mt-4">
                <x-label for="phone_number" :value="__('Numer telefonu')" />

                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email*')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- City -->
            <div class="mt-4">
                <x-label for="city" :value="__('Miasto')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"/>
            </div>
            <!-- Street -->
            <div class="mt-4">
                <x-label for="street" :value="__('Ulica')" />

                <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')"/>
            </div>
            <!-- Building_number -->
            <div class="mt-4">
                <x-label for="building_number" :value="__('Numer budynku')" />

                <x-input id="building_number" class="block mt-1 w-full" type="text" name="building_number" :value="old('building_number')"/>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Hasło*')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Potwierdź hasło*')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Masz już konto?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Zarejestruj') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
