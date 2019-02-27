@extends('layouts.main')
@section('content')

<h2> Products </h2>

<table style="width:100%">
    <tr>
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

@stop