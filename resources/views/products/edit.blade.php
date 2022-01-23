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
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" maxlength="500" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" required autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Opis')" />

                            <textarea id="description" maxlength="1500" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" required rows="5" >{{ $product->description }}</textarea>
                        </div>

                        <!-- Amount -->
                        <div class="mt-4">
                            <x-label for="amount" :value="__('Liczba')" />

                            <x-input id="amount" min="0" class="block mt-1 w-full" type="number" name="amount" value="{{ $product->amount }}" required/>
                        </div>

                        <!-- Price -->
                        <div class="mt-4">
                            <x-label for="price" :value="__('Cena')" />

                            <x-input id="price" step="0.01" min="0" class="block mt-1 w-full" type="number" name="price" value="{{ $product->price }}" required />
                        </div>

                        <!-- Category -->
                        <div class="mt-4">
                            <x-label for="category" :value="__('Kategoria')" />

                            <select id="category" step="0.01" min="0" class="block mt-1 w-full" type="number" name="category" :value="old('category')" required>
                                <option>-</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Zdjęcie')" />

                            <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" />
                        </div>
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $product->image_path) }}">
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
