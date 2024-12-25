<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductKeyword extends Model
{
    use HasFactory;

    protected $table = 'promo_product_keywords';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'keyword'
    ];
}
