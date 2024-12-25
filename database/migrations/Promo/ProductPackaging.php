<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPackaging extends Model
{
    use HasFactory;
    protected $table = 'promo_product_packagings';
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
