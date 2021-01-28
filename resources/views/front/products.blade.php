@extends('front.layout.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Products</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                        <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                        <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                        <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                    </ul>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Last product</div>
                    <div class="card-body">
                        <img class="img-fluid"
                            src="https://m.media-amazon.com/images/I/A1R4INfMHyL._AC_CLa%7C2140%2C2000%7C61BJkxuVWzL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_SX466._SX._UX._SY._UY_.png" />
                        <h5 class="card-title">Tamil T-shirt</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <p class="bloc_left_price">600.00</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row">
                    @foreach ($products as $product)

                        <a href="{{ url('/products/' . $product->id) }}">
                            <div class="col-12 col-md-6 col-lg-4 align-items-stretch">
                                <div class="card-group">

                                    <div class="card">
                                        <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="product.html"
                                                    title="View Product">{{ $product->name }}</a></h4>
                                            <p class="card-text">{{ $product->shortdescription }}</p>
                                            <div class="col">
                                                <p class="text-center font-weight-bold card-text price">Rs {{ $product->price }}.00 </p>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col">
                                                    <a href="{{ url('add-to-cart/' . $product->id) }}"
                                                        class="btn btn-success btn-block">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="col-12">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
