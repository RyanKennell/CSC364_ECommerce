<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'sku', 'qty_available', 'date_added', 'supplier_ID',  'supplier_SKU', 'cost',
    ];
}
