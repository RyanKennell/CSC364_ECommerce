@extends('layouts.main')
@section('content')

    <div class="content">

    <h2>Create a Product</h2>

    <form action="{{ route('products.store')  }}" method="POST">

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
                    <input id="name" name="name" placeholder="name" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description</label>
            <div class="col-8">
                <textarea id="description" name="description" cols="40" rows="5" required="required" class="form-control"></textarea>
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
                    <input id="price" name="price" placeholder="price" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="sku" class="col-4 col-form-label">Sku</label>
            <div class="col-8">
                <input id="sku" name="sku" placeholder="sku" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="qty_available" class="col-4 col-form-label">Quantity</label>
            <div class="col-8">
                <input id="qty_available" name="qty_available" placeholder="qty_available" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="supplier_ID" class="col-4 col-form-label">Supplier ID</label>
            <div class="col-8">
                <input id="supplier_ID" name="supplier_ID" placeholder="supplier_id" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="supplier_SKU" class="col-4 col-form-label">Supplier Sku</label>
            <div class="col-8">
                <input id="supplier_sku" name="supplier_SKU" placeholder="supplier_sku" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="cost" class="col-4 col-form-label">Cost</label>
            <div class="col-8">
                <input id="cost" name="cost" placeholder="cost" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@stop