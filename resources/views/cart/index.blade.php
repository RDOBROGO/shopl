<x-guest-layout>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        h3 {
            font-size: 16px;
        }
        .text-navy {
            color: #1ab394;
        }
        .cart-product-imitation {
        text-align: center;
        height: 80px;
        width: 80px;
        background-color: #f8f8f9;
        }
        .product-imitation.xl {
        padding: 120px 0;
        }
        .product-desc {
        padding: 20px;
        position: relative;
        }
        .ecommerce .tag-list {
        padding: 0;
        }
        .ecommerce .fa-star {
        color: #d1dade;
        }
        .ecommerce .fa-star.active {
        color: #f8ac59;
        }
        .ecommerce .note-editor {
        border: 1px solid #e7eaec;
        }
        table.shoping-cart-table {
        margin-bottom: 0;
        }
        table.shoping-cart-table tr td {
        border: none;
        text-align: right;
        }
        table.shoping-cart-table tr td.desc,
        table.shoping-cart-table tr td:first-child {
        text-align: left;
        }
        table.shoping-cart-table tr td:last-child {
        width: 80px;
        }
        .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
        }
        .ibox.collapsed .ibox-content {
        display: none;
        }
        .ibox:after,
        .ibox:before {
        display: table;
        }
        .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
        }
        .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
        }
        .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
        }
    </style>
<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-9">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="pull-right">(<strong>{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</strong>) Produktów</span>
                    <h5>Produkty w koszyku</h5>
                </div>
                @if(Session::has('cart'))

                @foreach ($cartProducts as $product)
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">
                            <tbody>
                            <tr>
                                <td width="90">
                                    <div class="cart-product-imitation">
                                        <img src="storage/{{ $product['item']['image_path'] }}">
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3>
                                    <a href="/product/{{ $product['item']['id'] }}" class="text-navy">
                                        {{ $product['item']['name'] }}
                                    </a>
                                    </h3>
                                    <p class="small">
                                        {{ $product['item']['description'] }}
                                    </p>

                                </td>
                                <td width="65">
                                    <input type="text" class="form-control" placeholder="{{ $product['item']['qty'] }}">
                                </td>
                                <td>
                                    <h4>
                                        {{ $product['item']['price'] }}PLN
                                    </h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach

                @endif

                <div class="ibox-content">
                    @if(Session::has('cart'))
                    <a href="/order" class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Zamów</a>
                    @endif
                    <a href="/" class="btn btn-white"><i class="fa fa-arrow-left"></i> Kontynuuj zakupy</a>

                </div>

            </div>

        </div>

        @if(Session::has('cart'))
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Podsumowanie koszyka</h5>
                </div>
                <div class="ibox-content">
                    <span>
                        Suma
                    </span>
                    <h2 class="font-bold">
                        {{ $totalPrice }}PLN
                    </h2>

                    <hr>
                </div>
            </div>
        </div>
        @endif;

    </div>
</div>
</div>
</x-guest-layout>