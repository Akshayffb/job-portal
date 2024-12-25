<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartColor extends Model
{
    use HasFactory;
    protected $table = 'promo_product_part_colors';
    public $timestamps = true;

    protected $fillable = [
        'product_part_id',
        'color_name',
        'hex'
    ];
}
