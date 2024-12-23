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
        Schema::create('promo_product_fob_points', function (Blueprint $table) {
            $table->id();
            $table->foreign('product_id')->references('id')->on('promo_products')->onDelete('cascade');
            $table->integer('fob_id');
            $table->string('fob_city');
            $table->string('fob_state');
            $table->string('fob_postal_code');
            $table->string('fob_country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_fob_points');
    }
};
