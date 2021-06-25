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
{{--                            <div class="col align-self-center text-right text-muted"> {{ $totalQuantity }} items--}}
{{--                            </div>--}}
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
                                    <a href="#">-</a>
                                    <a href="#" class="border">{{ $product['quantity'] }}</a>
                                    <a href="#">+</a>
                                </div>
                                <div class="col"> {{ $product['price'] }} &#x20AB;<span class="close" style="float: right">
                                       <a href="{{ route('products.deleteCart', $product['item']['id']) }}">&#10005;</a>
                                    </span>
                                </div>
                                <p>{{  $product['item']['id'] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="back-to-shop">
                    </div>
                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS {{ $totalQuantity }}</div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">{{ $totalPrice }} &#8363;</div>
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
