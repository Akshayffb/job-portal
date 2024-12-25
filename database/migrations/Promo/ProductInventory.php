<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'promo_product_inventories';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
    ];
}
