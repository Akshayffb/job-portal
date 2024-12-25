<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    use HasFactory;
    protected $table = 'promo_product_medias';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'part_id',
        'url',
        'media_type',
        'file_size',
        'width',
        'height',
        'dpi',
        'color',
        'description',
        'single_part',
        'change_time_stamp'
    ];
}
