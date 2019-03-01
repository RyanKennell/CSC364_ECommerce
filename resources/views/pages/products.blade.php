@extends('layouts.main')
@section('content')

<div class="text-center pt-3 pb-4">
    <h2> Products </h2>
</div>

<div class="table">
    <table class="table bg-primary text-white">
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sku</th>
            <th>Quantity Available</th>
            <th>Date Added</th>
            <th>Supplier ID</th>
            <th>Supplier Sku</th>
            <th>Cost</th>
        </tr>
    </table>
    <table class="table table-bordered">
        @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['sku'] }}</td>
                <td>{{ $product['qty_available'] }}</td>
                <td>{{ $product['date_added'] }}</td>
                <td>{{ $product['supplier_ID'] }}</td>
                <td>{{ $product['supplier_SKU'] }}</td>
                <td>{{ $product['cost'] }}</td>
            </tr>
        @endforeach
    </table>
</div>


@stop