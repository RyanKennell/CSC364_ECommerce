@extends('layouts.sidebar')
@section('content')

<div class="text-center pt-3 pb-4">
    <h2> Suppliers </h2>
</div>

    <div class="table">
        <table class="table table-bordered table-layout">
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
            <th>Edit</th>
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
                    <td>
                        <a href="/admin/updateSuppliers/{{$supplier['id']}} " class="btn btn-primary a-btn-slide-text">
                            <span><strong>Edit</strong></span>
                        </a>
                        <a href="/admin/deleteSuppliers/{{$supplier['id']}}" class="btn btn-danger a-btn-slide-text">
                            <span><strong>Delete</strong></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>



@stop
