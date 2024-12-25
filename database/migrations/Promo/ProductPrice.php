<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $table = 'promo_product_prices';
    public $timestamps = true;

    protected $fillable = [
        'price_group_id',
        'quantity_min',
        'quantity_max',
        'price',
        'discount_code'
    ];
}
