<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'customer_ID', 'order_number', 'shipping_address', 'shipping_city', 'shipping_state', 'shipping_zip', 'payment_method', 'order_date',
    ];
}
