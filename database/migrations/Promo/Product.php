<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'promo_products';
    public $timestamps = true;
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'brand',
        'export',
        'last_change_date',
        'creation_date',
        'end_date',
        'is_caution',
        'caution_comment',
        'is_closeout',
        'line_name'
    ];


    public function promoProductMarketingPoints()
    {
        return $this->hasMany(ProductMarketingPoint::class);
    }


    public function promoProductAffectiveDates()
    {
        return $this->hasMany(ProductAffectiveDate::class);
    }

    //     1. First task to create new tables with for new CRUD - call Promo prefix
    // Example: promo_products, promo_product_price etc... and same create new controller, model and views for Promo directory
}
