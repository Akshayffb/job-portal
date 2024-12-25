<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAffectiveDate extends Model
{
    use HasFactory;
    protected $table = 'promo_product_affective_dates';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'effective_date',
    ];
}
