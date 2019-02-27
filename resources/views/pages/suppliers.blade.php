@extends('layouts.main')
@section('content')

<h2> Suppliers </h2>

<table style="width:100%">
    <tr>
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

@stop