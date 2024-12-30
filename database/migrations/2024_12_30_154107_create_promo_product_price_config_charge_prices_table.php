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
        Schema::create('promo_product_price_config_charge_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charge_id')->constrained('charges');
            $table->integer('x_min_qty');
            $table->string('x_uom');
            $table->integer('y_min_qty');
            $table->string('y_uom');
            $table->decimal('price', 8, 3);
            $table->string('discount_code');
            $table->decimal('repeat_price', 8, 3)->nullable();
            $table->dateTime('price_effective_date')->nullable();
            $table->dateTime('price_expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_price_config_charge_prices');
    }
};
