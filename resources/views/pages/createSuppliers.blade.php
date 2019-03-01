@extends('layouts.main')
@section('content')

<div class="text-center pt-3 pb-5">
    <h2>Create a Supplier</h2>
</div>

    <form action="{{ route('suppliers.store')  }}" method="POST">

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
                        <input id="name" name="name" placeholder="name" type="text" class="form-control" aria-describedby="nameHelpBlock" required="required">
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
                        <input id="address" name="address" placeholder="address" type="text" aria-describedby="addressHelpBlock" required="required" class="form-control">
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
                        <input id="city" name="city" placeholder="city" type="text" aria-describedby="cityHelpBlock" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="state" class="col-4 col-form-label">State</label>
                <div class="col-8">
                    <input id="state" name="state" placeholder="state" type="text" class="form-control" aria-describedby="stateHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="zip" class="col-4 col-form-label">Zip Code</label>
                <div class="col-8">
                    <input id="zip" name="zip" placeholder="zip" type="text" class="form-control" aria-describedby="zipHelpBlock">
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
                        <input id="phone" name="phone" placeholder="phone" type="text" class="form-control" aria-describedby="phoneHelpBlock">
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
                        <input id="email" name="email" placeholder="email" type="text" class="form-control" aria-describedby="emailHelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="contact_name" class="col-4 col-form-label">Contact Name</label>
                <div class="col-8">
                    <input id="contact_name" name="contact_name" placeholder="contact" type="text" class="form-control" aria-describedby="contactHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="web_Site" class="col-4 col-form-label">Web Site</label>
                <div class="col-8">
                    <input id="web_Site" name="web_Site" placeholder="website" type="text" class="form-control" aria-describedby="websiteHelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

@stop
