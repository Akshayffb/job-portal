<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartDimension extends Model
{
    use HasFactory;
    protected $table = 'promo_product_part_dimensions';
    public $timestamps = true;
    protected $fillable = [
        'product_part_id',
        'dimension_uom',
        'depth',
        'height',
        'width',
        'weight_uom',
        'weight'
    ];
}
