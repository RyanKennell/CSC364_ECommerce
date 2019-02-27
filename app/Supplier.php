<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'address', 'city', 'state', 'zip', 'phone', 'email', 'contact_name', 'web_Site',
    ];
}
