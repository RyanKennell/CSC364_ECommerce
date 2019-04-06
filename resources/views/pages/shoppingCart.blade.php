@extends('layouts.main')
@section('content')

    <div class="text-center pt-3 pb-4">
        <h2> Shopping Cart </h2>
    </div>

    <div class="table">
        <table class="table table-bordered table-layout">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
            @php($order_total = 0)
            @foreach($carts as $cart)
                <tr>
                    <td>{{ $products[$cart['product_id']]['name'] }}</td>
                    <td>{{ $products[$cart['product_id']]['price'] }}</td>
                    <td>{{ $cart['quantity'] }}</td>
                    @php($total = $cart['price'] * $cart['quantity'])
                    @php($order_total += $total)
                    <td> {{ $total }}</td>
                    <td>
                        <a href="/removeSC/{{$cart['id']}}" class="btn btn-danger a-btn-slide-text">
                            <span><strong>Remove</strong></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="text-center">
            <h2>Order Total ${{ $order_total }}</h2>
            <a href="/#" class="btn btn-success a-btn-slide-text">
                <span><strong>Purchase</strong></span>
            </a>
        </div>
    </div>

@stop
