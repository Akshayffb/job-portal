<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryPart extends Model
{
    use HasFactory;
    protected $table = 'promo_inventory_parts';
    public $timestamps = true;

    protected $fillable = [
        'inventory_id',
        'part_id',
        'main_part',
        'part_color',
        'part_description',
        'manufactured_item',
        'buy_to_order',
        'attribute_selection'
    ];
}
