@extends('layouts.main')
@section('content')

<div class="text-center pt-3 pb-4">
    <h2> Suppliers </h2>
</div>

<div class="table">
    <table class="table bg-primary text-white">
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Phone</th>
            <th>E-Mail</th>
            <th>Contact Name</th>
            <th>Web Site</th>
        </tr>
    </table>
    <table class="table table-bordered">
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier['id'] }}</td>
                <td>{{ $supplier['name'] }}</td>
                <td>{{ $supplier['address'] }}</td>
                <td>{{ $supplier['city'] }}</td>
                <td>{{ $supplier['state'] }}</td>
                <td>{{ $supplier['zip'] }}</td>
                <td>{{ $supplier['phone'] }}</td>
                <td>{{ $supplier['email'] }}</td>
                <td>{{ $supplier['contact_name'] }}</td>
                <td>{{ $supplier['web_Site'] }}</td>
            </tr>
        @endforeach
    </table>
</div>


@stop