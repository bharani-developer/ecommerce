@extends('front.layout.master')
@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th scope="col" class="text-left"> img</th>
                                <th scope="col" class="text-left">Product</th>
                                <th scope="col" class="text-left">Available</th>
                                <th scope="col" class="text-left">Price</th>
                                <th scope="col" class="text-left">Quantity</th>
                                <th scope="col" class="text-left">Total</th>
                                <th scope="col" class="text-left">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity']; ?>

                                    <tr>
                                        <td class="text-cente"><img src="{{ $details['image'] }}" width="100" height="100"
                                                class="img-responsive" / /> </td>
                                        <div class="col-sm-9">
                                            <td class="text-cente">{{ $details['name'] }}</td>
                                        </div>
                                        <td class="text-cente">InStock</td>
                                        <td class="text-cente">{{ $details['price'] }}</td>
                                        <td class="text-cente">{{ $details['quantity'] }}</td>
                                        <td class="text-cente">{{ $details['price'] * $details['quantity'] }}</td>
                                        <td class="text-cente "><button class="btn btn-sm btn-danger remove-from-cart"
                                                data-id="{{ $id }}"><i class="fa fa-trash remove-from-cart"></i> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-cente">{{ $total . '.00' }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Shipping</td>
                                <td class="text-cente">150.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-cente total" id="total"><strong>{{ $tot = $total + 150 }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{ url('products') }}" class="btn btn-block btn-light">Continue Shopping</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-cente">
                        <a class="btn btn-lg btn-block btn-success text-uppercase buy" id="checkout">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
