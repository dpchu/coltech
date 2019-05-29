<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    protected $fillable = [
        'product_name',
        'quantity_in_stock',
        'price_per_item',
    ];
}
