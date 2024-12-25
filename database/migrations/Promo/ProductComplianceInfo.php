<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComplianceInfo extends Model
{
    use HasFactory;
    protected $table = 'promo_product_compliance_infos';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'compliance_info',
    ];
}
