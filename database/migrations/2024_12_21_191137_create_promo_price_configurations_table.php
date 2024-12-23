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
        Schema::create('promo_price_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('product_fob_point_id')->constrained('promo_product_fob_points')->onDelete('cascade');
            $table->string('currency');
            $table->string('price_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_price_configurations');
    }
};
