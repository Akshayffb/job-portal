<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartShippingPackage extends Model
{
    use HasFactory;
    protected $table = 'promo_product_part_shipping_packages';
    public $timestamps = true;

    // protected $fillable = [
    //     'product_part_id',
    //     'package_type',
    //     'description',
    //     'quantity',
    //     'dimension_uom',
    //     'depth',
    //     'height',
    //     'width',
    //     'weight_uom',
    //     'weight'
    // ];
}
