<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Podgląd kategorii') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" maxlength="500" class="block mt-1 w-full" type="text" name="name" value="{{ $category->name }}" disabled />
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
