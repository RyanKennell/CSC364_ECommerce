@extends('layouts.main')
@section('content')

<div class="text-center pt-3 pb-4">
    <div class="card">
        <div class="m-5">
            <h1> {{ $product['name'] }} </h1>
        </div>

        <div class="m-3">
            <h3>Description</h3>
        </div>

        <textarea readonly class="m-3" style="height: 20%"> {{ $product['description'] }}</textarea>

        <div class="row">
            <div class="card col-6 col-centered" >
                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Price</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['price'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Sku Number</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['sku'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Quantity Available</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['qty_available'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Date Added</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['date_added'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Supplier ID</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['supplier_ID'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Supplier Sku Number</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['supplier_SKU'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <h4 style="text-align:left;float:left;">Cost</h4>
                    <h4 style="text-align:right;float:right;">$ {{ $product['cost'] }}</h4>
                    <hr style="clear:both;"/>
                </div>

                <div class="row m-2" style="display: block">
                    <a href="/" class="btn btn-danger a-btn-slide-text">
                        <span><strong>Back</strong></span>
                    </a>
                    <a href="/#" class="btn btn-success a-btn-slide-text">
                        <span><strong>Add to Cart</strong></span>
                    </a>
                </div>

            </div>



        </div>
    </div>

</div>


@stop
