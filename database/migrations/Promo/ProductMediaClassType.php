<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMediaClassType extends Model
{
    use HasFactory;
    protected $table = 'promo_product_media_class_types';
    public $timestamps = true;

    protected $fillable = [
        'media_id',
        'class_type_id',
        'class_type_name'
    ];
}
