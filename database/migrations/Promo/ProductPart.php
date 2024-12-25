<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPart extends Model
{
    use HasFactory;
    protected $table = 'promo_product_parts';
    public $timestamps = true;

    protected $fillable = [
        'part_id',
        'product_id',
        'description',
        'country_of_origin',
        'primary_material',
        'shape',
        'lead_time',
        'unspsc',
        'gtin',
        'is_rush_service',
        'end_date',
        'effective_date',
        'is_closeout',
        'is_caution',
        'caution_comment',
        'nmfc_code',
        'nmfc_description',
        'is_on_demand',
        'is_hazmat'
    ];
}
