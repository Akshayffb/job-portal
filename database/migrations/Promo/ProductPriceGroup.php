<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPriceGroup extends Model
{
    use HasFactory;
    protected $table = 'promo_product_price_groups';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'group_name',
        'currency',
        'description'
    ];
}
