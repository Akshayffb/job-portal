<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductShippingPackage extends Model
{
    use HasFactory;
    protected $table = 'promo_product_shipping_packages';
    public $timestamps = true;

    protected $fillable = [
        'part_id',
        'package_type',
        'quantity',
        'dimension_uom',
        'depth',
        'height',
        'width',
        'weight_uom',
        'weight'
    ];
}
