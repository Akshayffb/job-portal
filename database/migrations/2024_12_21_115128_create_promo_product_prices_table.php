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
        Schema::create('promo_product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_group_id')->constrained('promo_product_price_groups')->onDelete('cascade');
            $table->integer('quantity_min');
            $table->integer('quantity_max');
            $table->decimal('price');
            $table->string('discount_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_prices');
    }
};
