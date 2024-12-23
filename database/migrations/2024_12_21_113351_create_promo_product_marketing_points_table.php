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
        Schema::create('promo_product_marketing_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('point_type')->nullable();
            $table->string('point_copy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_marketing_points');
    }
};
