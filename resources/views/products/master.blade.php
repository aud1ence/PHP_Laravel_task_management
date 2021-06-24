<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/dist/assets/favi.ico')}}"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('backend/dist/css/styles.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

{{--    <link rel="stylesheet" type="text/css" href="{{ asset('backend/dist/css/my.css') }}">--}}
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Boutique</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">Create product</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('products.index') }}">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="{{ route('products.showCart') }}">
                <button class="btn btn-outline-dark" type="submit" data-toggle="modal" data-target="#myModal">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                <span class="badge bg-dark text-white ms-1 rounded-pill">{{ \Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQuantity : '' }}</span>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5">
    {{--    <img src="{{ asset('storage/products/2021-06-23_04:31:01_Robusta.jpg') }}" alt="">--}}
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">@yield('title')</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
<!-- Section-->
{{--<section class="py-5">--}}
{{--    <div class="container px-4 px-lg-5 mt-5">--}}
{{--        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Fancy Product</h5>--}}
{{--                            <!-- Product price-->--}}
{{--                            $40.00 - $80.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Sale badge-->--}}
{{--                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Special Item</h5>--}}
{{--                            <!-- Product reviews-->--}}
{{--                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                            </div>--}}
{{--                            <!-- Product price-->--}}
{{--                            <span class="text-muted text-decoration-line-through">$20.00</span>--}}
{{--                            $18.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Sale badge-->--}}
{{--                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Sale Item</h5>--}}
{{--                            <!-- Product price-->--}}
{{--                            <span class="text-muted text-decoration-line-through">$50.00</span>--}}
{{--                            $25.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Popular Item</h5>--}}
{{--                            <!-- Product reviews-->--}}
{{--                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                            </div>--}}
{{--                            <!-- Product price-->--}}
{{--                            $40.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Sale badge-->--}}
{{--                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Sale Item</h5>--}}
{{--                            <!-- Product price-->--}}
{{--                            <span class="text-muted text-decoration-line-through">$50.00</span>--}}
{{--                            $25.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Fancy Product</h5>--}}
{{--                            <!-- Product price-->--}}
{{--                            $120.00 - $280.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Sale badge-->--}}
{{--                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Special Item</h5>--}}
{{--                            <!-- Product reviews-->--}}
{{--                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                            </div>--}}
{{--                            <!-- Product price-->--}}
{{--                            <span class="text-muted text-decoration-line-through">$20.00</span>--}}
{{--                            $18.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col mb-5">--}}
{{--                <div class="card h-100">--}}
{{--                    <!-- Product image-->--}}
{{--                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="text-center">--}}
{{--                            <!-- Product name-->--}}
{{--                            <h5 class="fw-bolder">Popular Item</h5>--}}
{{--                            <!-- Product reviews-->--}}
{{--                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                                <div class="bi-star-fill"></div>--}}
{{--                            </div>--}}
{{--                            <!-- Product price-->--}}
{{--                            $40.00--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product actions-->--}}
{{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('backend/dist/js/scripts.js')}}"></script>
{{--Toastr JS--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>
</html>
