<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    'code',
    'name',
    'tax_id',
    'type', 
    'pic',
    'email',
    'phone',
    'address'
];
}

