<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edycja produktu') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" maxlength="500" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                        </div>

                        <!-- Surname -->
                        <div>
                            <x-label for="surname" :value="__('Nazwisko')" />

                            <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{ $user->surname }}"/>
                        </div>

                        <!-- PhoneNumber -->
                        <div>
                            <x-label for="phone_number" :value="__('Numer telefonu')" />

                            <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{ $user->phone_number }}"/>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email*')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
                        </div>
                        <!-- City -->
                        <div>
                            <x-label for="city" :value="__('Miasto')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $user->city }}"/>
                        </div>
                        <!-- Street -->
                        <div>
                            <x-label for="street" :value="__('Ulica')" />

                            <x-input id="street" class="block mt-1 w-full" type="text" name="street" value="{{ $user->street }}"/>
                        </div>
                        <!-- Building_number -->
                        <div>
                            <x-label for="building_number" :value="__('Numer budynku')" />

                            <x-input id="building_number" class="block mt-1 w-full" type="text" name="building_number" value="{{ $user->building_number }}"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Edytuj') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
