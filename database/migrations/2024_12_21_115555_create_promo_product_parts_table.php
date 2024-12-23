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
        Schema::create('promo_product_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('part_id')->unique();
            $table->text('description');
            $table->string('country_of_origin');
            $table->string('primary_material');
            $table->string('shape')->nullable();
            $table->string('lead_time');
            $table->string('unspsc')->nullable();
            $table->string('gtin')->nullable();
            $table->boolean('is_rush_service')->nullable();
            $table->timestamp('end_date');
            $table->timestamp('effective_date');
            $table->boolean('is_closeout');
            $table->boolean('is_caution');
            $table->string('caution_comment')->nullable();
            $table->string('nmfc_code');
            $table->string('nmfc_description')->nullable();
            $table->boolean('is_on_demand');
            $table->boolean('is_hazmat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_parts');
    }
};
