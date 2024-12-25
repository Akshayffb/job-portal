<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFobPoint extends Model
{
    use HasFactory;
    protected $table = 'promo_product_fob_points';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'fob_id',
        'fob_city',
        'fob_state',
        'fob_postal_code',
        'fob_country'
    ];
}
