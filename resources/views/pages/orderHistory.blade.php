@extends('layouts.sidebar')
@section('content')

<div class="text-center pt-3 pb-4">
    <h2> Order History </h2>
</div>

    <div class="table">
        <table class="table table-bordered table-layout">
        <tr>
            <th>ID</th>
            <th>Shipping Address</th>
            <th>Shipping City</th>
            <th>Shipping State</th>
            <th>Shipping Zip</th>
            <th>Payment Method</th>
        </tr>

        @foreach($data as $order)
            <tr>
                <td>{{ $order['id'] }}</td>
                <td>{{ $order['shipping_address'] }}</td>
                <td>{{ $order['shipping_city'] }}</td>
                <td>{{ $order['shipping_state'] }}</td>
                <td>{{ $order['shipping_zip'] }}</td>
                <td>{{ $order['payment_method'] }}</td>
            </tr>
        @endforeach
    </table>
    </div>

@stop
