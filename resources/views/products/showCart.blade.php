@extends('products.master')
@section('title', 'This is cart')
@section('content')
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                        </div>
                    </div>
                    @foreach($products as $product)
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid"
                                                        src="{{asset('storage/products/' . $product['item']['image'])}}">
                                </div>
                                <div class="col">
                                    <div class="row text-muted">Shirt</div>
                                    <div class="row">{{ $product['item']['name'] }}</div>
                                </div>
                                <div class="col">
                                    <button href="javascript:" onclick="reduce({{ $product['item']['id'] }});">-
                                    </button>
{{--                                    @foreach($products as $product)--}}
                                        <input type="text" style="width: 20%" class="quantity-item-{{ $product['item']['id'] }}"
                                               value="{{ $product['item']['quantity'] }}">
                                        {{--                                    </span>--}}
{{--                                    @endforeach--}}
                                    <button class="btn-outline-primary increase-btn plus"
                                            onclick="increase({{ $product['item']['id'] }});">+
                                    </button>
                                </div>

                                <div class="col">
                                    <b id="total-price-item">{{ $product['price'] }}</b>
                                    &#x20AB;
                                    <span class="close" style="float: right">
                                       <a href="{{ route('products.deleteCart', $product['item']['id']) }}"
                                          onclick="return confirm('Are you sure');">&#10005;</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS <b
                                id="total-quantity-cart">{{ $totalQuantity }}</b></div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">
                            <b id="total-price">{{ $totalPrice }}</b> &#8363;
                        </div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                    <a href="{{ route('products.index') }}">
                        <button class="btn">BACK TO SHOP</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
