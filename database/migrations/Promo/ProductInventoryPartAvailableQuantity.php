<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryPartAvailableQuantity extends Model
{
    use HasFactory;
    protected $table = 'promo_product_inventory_part_available_quantities';
    public $timestamps = true;

    protected $fillable = [
        'inventory_part_id',
        'uom',
        'value'
    ];
}
