<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'promo_product_categories';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'category',
        'sub_category'
    ];
}
