@extends('layouts.sidebar')
@section('content')

<div class="text-center pt-3 pb-4">
    <h2> Products </h2>
</div>

    <div class="table">
        <table class="table table-bordered table-layout">
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
            <th>Edit</th>
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
                <td>
                    <a href="/admin/updateProducts/{{$product['id']}} " class="btn btn-primary a-btn-slide-text">
                        <span><strong>Edit</strong></span>
                    </a>
                    <a href="/admin/deleteProducts/{{$product['id']}}" class="btn btn-danger a-btn-slide-text">
                        <span><strong>Delete</strong></span>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

@stop
