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
        Schema::create('promo_product_price_config_charges', function (Blueprint $table) {
            $table->id();
            $table->string('charge_id');
            $table->string('charge_name');
            $table->text('charge_description');
            $table->string('charge_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_price_config_charges');
    }
};
