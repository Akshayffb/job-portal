<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promo_inventory_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained('promo_inventories')->onDelete('cascade');
            $table->string('part_id');
            $table->boolean('main_part');
            $table->string('part_color');
            $table->text('part_description');
            $table->boolean('manufactured_item');
            $table->boolean('buy_to_order');
            $table->string('attribute_selection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_inventory_parts');
    }
};
