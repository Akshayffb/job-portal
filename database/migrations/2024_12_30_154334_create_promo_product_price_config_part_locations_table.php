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
        Schema::create('promo_product_price_config_part_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_id')->constrained('parts');
            $table->string('location_id')->constrained('locations');
            $table->string('location_name ');
            $table->integer('decorations_included');
            $table->boolean('default_location');
            $table->integer('max_decoration');
            $table->integer('min_decoration');
            $table->integer('location_rank')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_price_config_part_locations');
    }
};
