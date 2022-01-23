<x-guest-layout>
    <div class="container pt-5">
        <div class="row">
        <div class="col-md-8 order-md-2 col-lg-9">
            <div class="container-fluid">
            <div class="row   mb-5">
            </div>
            <div class="row" id="products">
                @foreach ($products as $product)
                    <div class="col-6 col-md-6 col-lg-4 mb-3">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                @if(!is_null($product->image_path))
                                    <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu: {{ $product->name }}">
                                @else
                                    <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu: {{ $product->name }}">
                                @endif

                            </div>
                            <div class="card-body text-center">
                            <h4 class="card-title">
                                <a href="/product/{{ $product->id }}" class=" font-weight-bold text-dark text-uppercase small">{{ $product->name }}</a>
                            </h4>
                            <h5 class="card-price small">
                                <i>PLN {{ $product->price }}</i>
                            </h5>
                            </div>
                            <a href="/cart/{{ $product->id }}" class="btn btn-info add_cart">Dodaj do koszyka</a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
        <form class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
            <h6 class="text-uppercase font-weight-bold mb-3">Kategorie</h6>

            @foreach ($categories as $category)
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="filter[categories][]" id="category-{{ $category->id }}" value="{{ $category->id }}">
                    <label class="custom-control-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                </div>
                </div>
            @endforeach

            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Cena</h6>
            <div class="price-filter-control">
            <input type="number" class="form-control w-50 pull-left mb-2" placeholder="1000" name="filter[price_min]" id="price-min-control">
            <input type="number" class="form-control w-50 pull-right" placeholder="5000" name="filter[price_max]" id="price-max-control">
            </div>
            <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <a id="filter" href="#" class="btn btn-info btn-block btn-primary mt-5">Filtruj</a>
        </form>

        </div>
    </div>
</x-guest-layout>

<script>
    $(function () {

        $('a#filter').click(function(event) {
            const form = $('form.sidebar-filter').serialize();
            $.ajax({
                method: "GET",
                url: "/",
                data: form
            })
            .done(function (response) {
                $('div#products').empty();
                $.each(response.data, function (index, product) {
                    const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' +
                        '<div class="card h-100 border-0">' +
                            '<div class="card-img-top">' +
                                '@if(!is_null($product->image_path))' +
                                    '<img src="storage/' + product.image_path + '" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu: ' + product.name + '">' +
                                '@else' +
                                    '<img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu: ' + product.name + '">' +
                                '@endif' +

                            '</div>' +
                            '<div class="card-body text-center">' +
                            '<h4 class="card-title">' +
                                '<a href="product.html" class=" font-weight-bold text-dark text-uppercase small">' + product.name + '</a>' +
                            '</h4>' +
                            '<h5 class="card-price small">' +
                                '<i>PLN'  + product.price + '</i>' +
                            '</h5>' +
                            '</div>' +
                            '<button href="/cart/' + product.id + '" class="btn btn-info add_cart" data-id="' + product.id + '">Dodaj do koszyka</button>'
                        '</div>' +
                    '</div>';

                    $('div#products').append(html);
                    
                });
            })
            .fail(function (data) {
                alert('ERROR');
            })

        });
    });
</script>
