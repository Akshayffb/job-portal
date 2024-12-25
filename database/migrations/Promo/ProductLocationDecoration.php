<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLocationDecoration extends Model
{
    use HasFactory;
    protected $table = 'promo_product_location_decorations';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'location_name',
        'max_imprint_colors',
        'decoration_name',
        'location_decoration_combo_default0',
        'price_includes'
    ];
}
