<x-guest-layout>
    <style>
        body {
            background-color: #dce3f0
        }

        .height {
            height: 100vh
        }

        .card {
            width: 350px;
            height: 370px
        }

        .image {
            position: absolute;
            right: 12px;
            top: 10px;
            max-width: 200px;
            max-height: 120px !important;
        }

        .main-heading {
            font-size: 40px;
            color: lightblue !important
        }

        .btn {
            height: 48px;
            font-size: 18px;
            margin-top: 10px
        }
    </style>
    <div class="height d-flex justify-content-center align-items-center">
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="mt-2">
                    <div class="mt-5">
                        <h1 class="main-heading mt-0">{{ $product->name }}</h1>
                    </div>
                    <h5>{{ $product->price }} PLN</h5>
                </div>
                <div class="image"> <img class="image" src="/storage/{{ $product->image_path }}"> </div>
            </div>
            <p>{{ $product->description }}</p> 
            <a href="/cart/{{ $product->id }}" class="btn btn-info add_cart">Dodaj do koszyka</a>
            <a href="/" class="btn btn-success add_cart">Kontynuuj zakupy</a>
            <a href="/cart" class="btn btn-info add_cart">Koszyk</a>
        </div>
    </div>
</x-guest-layout>