<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
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
