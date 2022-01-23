<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edycja produktu') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('order.summary') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Imie*')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" required autofocus />
                            </div>

                            <!-- Surname -->
                            <div class="mt-4">
                                <x-label for="surname" :value="__('Nazwisko*')" />

                                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{ Auth::user()->surname }}" required />
                            </div>

                            <!-- PhoneNumber -->
                            <div class="mt-4">
                                <x-label for="phone_number" :value="__('Numer telefonu*')" />

                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" required/>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email*')" required />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required />
                            </div>
                            <!-- City -->
                            <div class="mt-4">
                                <x-label for="city" :value="__('Miasto*')" required />

                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ Auth::user()->city }}" required />
                            </div>
                            <!-- Street -->
                            <div class="mt-4">
                                <x-label for="street" :value="__('Ulica*')" required />

                                <x-input id="street" class="block mt-1 w-full" type="text" name="street" value="{{ Auth::user()->street }}" required/>
                            </div>
                            <!-- Building_number -->
                            <div class="mt-4">
                                <x-label for="building_number" :value="__('Numer budynku*')" required />

                                <x-input id="building_number" class="block mt-1 w-full" type="text" name="building_number" value="{{ Auth::user()->building_number }}" required/>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Zamów') }}
                                </x-button>
                            </div>
                        </form>
                        @endauth

                    @else
                        <form method="POST" action="{{ route('order.summary') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Imie*')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Surname -->
                            <div class="mt-4">
                                <x-label for="surname" :value="__('Nazwisko*')" />

                                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required />
                            </div>

                            <!-- PhoneNumber -->
                            <div class="mt-4">
                                <x-label for="phone_number" :value="__('Numer telefonu*')" />

                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required/>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email*')" required />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            <!-- City -->
                            <div class="mt-4">
                                <x-label for="city" :value="__('Miasto*')" required />

                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                            </div>
                            <!-- Street -->
                            <div class="mt-4">
                                <x-label for="street" :value="__('Ulica*')" required />

                                <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required/>
                            </div>
                            <!-- Building_number -->
                            <div class="mt-4">
                                <x-label for="building_number" :value="__('Numer budynku*')" required />

                                <x-input id="building_number" class="block mt-1 w-full" type="text" name="building_number" :value="old('building_number')" required/>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Zamów') }}
                                </x-button>
                            </div>
                        </form>
                    @endif

            </div>
        </div>
    </div>
</div>
</x-guest-layout>