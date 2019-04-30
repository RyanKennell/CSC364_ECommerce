@extends('layouts.main')
@section('content')

<div class="content">

    <div class="text-center pt-3 pb-5">
        <h2>Purchase</h2>
    </div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="{{ route('order.store')  }}" method="POST">

        @csrf
    <form>
        <div class="form-group row">
            <label for="shipping_address" class="col-4 col-form-label">Shipping Address</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="shipping_address" name="shipping_address" type="text" required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_city" class="col-4 col-form-label">City</label>
            <div class="col-8">
                <input id="shipping_city" name="shipping_city" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_state" class="col-4 col-form-label">State</label>
            <div class="col-8">
                <input id="shipping_state" name="shipping_state" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_zip" class="col-4 col-form-label">Zip</label>
            <div class="col-8">
                <input id="shipping_zip" name="shipping_zip" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="payment_method" class="col-4 col-form-label">Payment Method</label>
            <div class="col-8">
                <input id="payment_method" name="payment_method" type="text" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <div class="form-group row">
                <div class="col-12">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>
</div>
@stop
