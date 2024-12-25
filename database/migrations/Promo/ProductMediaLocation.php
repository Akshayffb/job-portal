<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaLocation extends Model
{
    use HasFactory;
    protected $table = 'promo_product_media_locations';
    public $timestamps = true;

    protected $fillable = [
        'media_id',
        'location_id',
        'location_name'
    ];
}
