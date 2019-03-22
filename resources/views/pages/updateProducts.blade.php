@extends('layouts.sidebar')
@section('content')

<div class="content">

    <div class="text-center pt-3 pb-5">
        <h2>Update a Product</h2>
    </div>

    <form action="{{ route('products.edit', $products['id'])  }}" method="PUT">

    @csrf
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Name</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="name" name="name" value="{{ $products['name'] }}" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description</label>
            <div class="col-8">
                <textarea id="description" name="description" cols="40" rows="5" required="required" class="form-control">{{ $products['description'] }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-dollar"></i>
                        </div>
                    </div>
                    <input id="price" name="price" value="{{ $products['price'] }}" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="sku" class="col-4 col-form-label">Sku</label>
            <div class="col-8">
                <input id="sku" name="sku"value="{{ $products['sku'] }}" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="qty_available" class="col-4 col-form-label">Quantity</label>
            <div class="col-8">
                <input id="qty_available" name="qty_available" value="{{ $products['qty_available'] }}" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="supplier_ID" class="col-4 col-form-label">Supplier ID</label>
            <div class="col-8">
                <input id="supplier_ID" name="supplier_ID" value="{{ $products['supplier_ID'] }}" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="supplier_SKU" class="col-4 col-form-label">Supplier Sku</label>
            <div class="col-8">
                <input id="supplier_sku" name="supplier_SKU" value="{{ $products['supplier_SKU'] }}" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="cost" class="col-4 col-form-label">Cost</label>
            <div class="col-8">
                <input id="cost" name="cost" value="{{ $products['cost'] }}" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@stop
