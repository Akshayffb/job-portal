<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPriceConfiguration extends Model
{
    use HasFactory;
    protected $table = 'promo_product_price_configurations';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'product_fob_point_id',
        'currency',
        'price_type'
    ];
}
