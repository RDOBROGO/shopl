<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorie') }}
        </h2>
        <x-dropdown-link :href="route('categories.create')" >
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
                                <th>dodano</th>
                                <th>zmodyfikowano</th>
                                <th>usuń</th>
                                <th>edytuj</th>
                                <th>podgląd</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product_categories as $category)
                            <tr>
                                <th>{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <form method="GET" action="/categories/delete/{{ $category->id }}">
                                        @csrf
                                        <button>usuń</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="GET" action="/categories/edit/{{ $category->id }}">
                                        @csrf
                                        <button>edytuj</button>
                                    </form>
                                    {{-- <a @method(DELETE) href="/users/delete/{{ $products->id }}">usuń</a> --}}
                                </td>
                                <td>
                                    <form method="GET" action="/categories/{{ $category->id }}">
                                        @csrf
                                        <button>podgląd</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $product_categories->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
