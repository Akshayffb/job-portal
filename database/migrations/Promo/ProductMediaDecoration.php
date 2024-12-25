<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaDecoration extends Model
{
    use HasFactory;
    protected $table = 'promo_product_media_decorations';
    public $timestamps = true;

    protected $fillable = [
        'media_id',
        'decoration_id',
        'decoration_name'
    ];
}
