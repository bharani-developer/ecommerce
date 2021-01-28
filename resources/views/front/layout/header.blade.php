<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/products') }}">BK Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item  @if ($page_info['page_name']=='Home
                ' ) active @endif">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item @if ($page_info['page_name']=='PRODUCTS' ) active @endif">
                    <a class="nav-link" href="{{ '/products' }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if ($page_info['page_name']=='CART' ) active @endif" href="{{ url('/cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if ($page_info['page_name']=='CONTACT' ) active @endif" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <div class="dropdown">
                                <button type="button" class="btn btn-info" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="container-fluid d-flex flex-column">

                                        <div class="row total-header-section">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </div>
                                            <?php $total = 0; ?>
                                            @foreach ((array) session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'];
                                                ?>
                                            @endforeach
                                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img class="img-fluid"  src="{{ $details['image'] }}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['name'] }}</p>
                                                        <span class="price text-info"> ${{ $details['price'] }}</span>
                                                        <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View
                                                    all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('scripts')
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{ $page_info['page_name'] }}</h1>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la
            mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années
            1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
            polices de texte...</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item" aria-current="page">{{ $page_info['page_name'] }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
