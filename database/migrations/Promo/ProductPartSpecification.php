<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartSpecification extends Model
{
    use HasFactory;
    protected $table = 'promo_product_part_specifications';

    public $timestamps = true;
    protected $fillable = [
        'product_part_id',
        'specification_type',
        'measurement_value'
    ];
}
