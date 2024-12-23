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
        Schema::create('promo_product_location_decorations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('location_name');
            $table->integer('max_imprint_colors');
            $table->string('decoration_name');
            $table->boolean('location_decoration_combo_default');
            $table->boolean('price_includes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_location_decorations');
    }
};
