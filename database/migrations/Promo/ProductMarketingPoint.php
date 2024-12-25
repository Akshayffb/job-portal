<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMarketingPoint extends Model
{
    use HasFactory;

    protected $table = 'promo_product_marketing_points';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'point_type',
        'point_copy'
    ];
}
