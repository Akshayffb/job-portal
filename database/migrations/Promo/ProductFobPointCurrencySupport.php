<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFobPointCurrencySupport extends Model
{
    use HasFactory;
    protected $table = 'promo_product_fob_point_currency_supports';
    public $timestamps = true;

    protected $fillable = [
        'product_fob_point_id',
        'currency',
    ];
}
