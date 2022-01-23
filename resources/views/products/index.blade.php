<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produkty') }}
        </h2>
        <x-dropdown-link :href="route('products.create')" >
            {{ __('Dodaj') }}
        </x-dropdown-link>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nazwa</th>
                                <th>opis</th>
                                <th>cena</th>
                                <th>kategoria</th>
                                <th>dodano</th>
                                <th>zmodyfikowano</th>
                                <th>usuń</th>
                                <th>edytuj</th>
                                <th>podgląd</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th>{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    @if(is_null($product->category)) -
                                    @else{{ $product->category->name }}
                                    @endif
                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <form method="GET" action="/products/delete/{{ $product->id }}">
                                        @csrf
                                        <button>usuń</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="GET" action="/products/edit/{{ $product->id }}">
                                        @csrf
                                        <button>edytuj</button>
                                    </form>
                                    {{-- <a @method(DELETE) href="/users/delete/{{ $products->id }}">usuń</a> --}}
                                </td>
                                <td>
                                    <form method="GET" action="/products/{{ $product->id }}">
                                        @csrf
                                        <button>podgląd</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
