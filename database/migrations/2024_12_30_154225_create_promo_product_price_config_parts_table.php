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
        Schema::create('promo_product_price_config_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_id')->unique();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('promo_product_price_config_part_locations')->onDelete('cascade');
            $table->text('part_description');
            $table->string('part_group');
            $table->boolean('part_group_required')->default(false);
            $table->string('part_group_description');
            $table->decimal('ratio', 8, 2)->default(0);
            $table->boolean('default_part')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_price_config_parts');
    }
};
