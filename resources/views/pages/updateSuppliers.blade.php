@extends('layouts.sidebar')
@section('content')

<div class="text-center pt-3 pb-5">
    <h2>Update a Supplier</h2>
</div>

    <form action="{{ route('suppliers.edit', $supplier['id'])  }}" method="PUT">
        @csrf
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Supplier Name</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book-o"></i>
                            </div>
                        </div>
                        <input id="name" name="name" value="{{$supplier['name']}}" type="text" class="form-control" aria-describedby="nameHelpBlock" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-4 col-form-label">Address</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card-o"></i>
                            </div>
                        </div>
                        <input id="address" name="address" value="{{$supplier['address']}}" type="text" aria-describedby="addressHelpBlock" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-4 col-form-label">City</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-home"></i>
                            </div>
                        </div>
                        <input id="city" name="city" value="{{$supplier['city']}}" type="text" aria-describedby="cityHelpBlock" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="state" class="col-4 col-form-label">State</label>
                <div class="col-8">
                    <input id="state" name="state" value="{{$supplier['state']}}" type="text" class="form-control" aria-describedby="stateHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="zip" class="col-4 col-form-label">Zip Code</label>
                <div class="col-8">
                    <input id="zip" name="zip" value="{{$supplier['zip']}}" type="text" class="form-control" aria-describedby="zipHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-4 col-form-label">Phone Number</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-mobile-phone"></i>
                            </div>
                        </div>
                        <input id="phone" name="phone" value="{{$supplier['phone']}}" type="text" class="form-control" aria-describedby="phoneHelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <input id="email" name="email" value="{{$supplier['email']}}" type="text" class="form-control" aria-describedby="emailHelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="contact_name" class="col-4 col-form-label">Contact Name</label>
                <div class="col-8">
                    <input id="contact_name" name="contact_name" value="{{$supplier['contact_name']}}" type="text" class="form-control" aria-describedby="contactHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="web_Site" class="col-4 col-form-label">Web Site</label>
                <div class="col-8">
                    <input id="web_Site" name="web_Site" value="{{$supplier['web_Site']}}" type="text" class="form-control" aria-describedby="websiteHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

@stop
