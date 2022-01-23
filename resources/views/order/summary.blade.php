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
                    <h1>Adresat:</h1>
                    <p>{{ $data->surname }}</p>
                    <p>{{ $data->phone_number }}</p>
                    <p>{{ $data->email }}</p>
                    <p>{{ $data->city }}</p>
                    <p>{{ $data->street }}</p>
                    <p>{{ $data->building_number }}</p>

                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Kwota do zapłaty:</h1>
                    {{ Session::has('cart') ? Session::get('cart')->totalPrice : '0' }}PLN
                    <a href="#" class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Zapłać</a>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>