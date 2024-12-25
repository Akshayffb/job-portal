<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartPackaging extends Model
{
    use HasFactory;
    protected $table = 'promo_product_part_packagings';
    public $timestamps = true;

    protected $fillable = [
        'product_part_id',
        'is_default',
        'package_type',
        'description',
        'quantity',
        'dimension_uom',
        'depth',
        'height',
        'width',
        'weight_uom',
        'weight'
    ];
}
