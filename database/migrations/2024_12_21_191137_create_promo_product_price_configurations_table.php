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
        Schema::create('promo_product_price_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('product_fob_point_id')->constrained('promo_product_fob_points')->onDelete('cascade');
            $table->string('currency')->index();
            $table->string('price_type');
            $table->timestamps();
        });

        Schema::create('promo_product_price_config_colors', function (Blueprint $table) {
            $table->id();
            $table->string('color_name')->index();
            $table->timestamps();
        });

        // Create decoration methods table
        Schema::create('promo_product_price_config_decoration_methods', function (Blueprint $table) {
            $table->id();
            $table->string('decoration_name')->index();
            $table->timestamps();
        });

        // Create decoration_colors table
        Schema::create('promo_product_price_config_decoration_colors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('color_id')->constrained('promo_product_price_config_colors')->onDelete('cascade');
            $table->timestamps();
        });

        // Create decoration table
        Schema::create('promo_product_price_config_decorations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('decoration_method_id')->constrained('promo_product_price_config_decoration_methods')->onDelete('cascade');
            $table->text('decoration_geometry');
            $table->integer('decoration_height')->nullable();
            $table->integer('decoration_width')->nullable();
            $table->integer('decoration_diameter')->nullable();
            $table->string('decoration_uom');
            $table->timestamps();
        });

        // Create FOB points table
        Schema::create('promo_product_price_config_fob_points', function (Blueprint $table) {
            $table->id();
            $table->string('fob_id');
            $table->string('fob_city')->nullable();
            $table->string('fob_state');
            $table->string('fob_postal_code');
            $table->string('fob_country');
            $table->timestamps();
        });

        // Create currencies table
        Schema::create('promo_product_price_config_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->timestamps();
        });

        // Create location table
        Schema::create('promo_product_price_config_locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->string('location_name');
            $table->json('location_rank')->nullable();
            $table->timestamps();
        });

        // Create product_fob relationship table
        Schema::create('promo_product_price_config_product_fob', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('fob_point_id')->constrained('promo_product_price_config_fob_points')->onDelete('cascade');
            $table->timestamps();
        });

        // Create part table
        Schema::create('promo_product_price_config_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('part_id');
            $table->text('part_description');
            $table->timestamps();
        });

        // Create part_prices table
        Schema::create('promo_product_price_config_part_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_id')->constrained('promo_product_price_config_parts')->onDelete('cascade');
            $table->integer('min_quantity');
            $table->decimal('price', 10, 2);
            $table->string('discount_code');
            $table->string('price_uom');
            $table->timestamp('price_effective_date');
            $table->timestamp('price_expiry_date');
            $table->timestamps();
        });

        // Create charge table
        Schema::create('promo_product_price_config_charges', function (Blueprint $table) {
            $table->id();
            $table->string('charge_name');
            $table->string('charge_description');
            $table->string('charge_type');
            $table->timestamps();
        });

        // Create charge_prices table
        Schema::create('promo_product_price_config_charge_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charge_id')->constrained('promo_product_price_config_charges')->onDelete('cascade');
            $table->integer('min_quantity');
            $table->decimal('price', 10, 2);
            $table->string('discount_code');
            $table->string('price_uom');
            $table->timestamps();
        });

        // Create product_location relationship table
        Schema::create('promo_product_price_config_product_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('promo_product_price_config_locations')->onDelete('cascade');
            $table->timestamps();
        });

        // Create decoration_charge table to link charges to decoration methods
        Schema::create('promo_product_price_config_decoration_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('decoration_id')->constrained('promo_product_price_config_decorations')->onDelete('cascade');
            $table->foreignId('charge_id')->constrained('promo_product_price_config_charges')->onDelete('cascade');
            $table->timestamps();
        });

        // Create decoration_units table to store decoration unit limits
        Schema::create('promo_product_price_config_decoration_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('decoration_id')->constrained('promo_product_price_config_decorations')->onDelete('cascade');
            $table->integer('decoration_units_included');
            $table->integer('decoration_units_max');
            $table->timestamps();
        });

        // Create default decoration table
        Schema::create('promo_product_price_config_default_decorations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('decoration_id')->constrained('promo_product_price_config_decorations')->onDelete('cascade');
            $table->boolean('default_decoration');
            $table->timestamps();
        });

        // Create fob_currency relationship table
        Schema::create('promo_product_price_config_fob_currency', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fob_point_id')->constrained('promo_product_price_config_fob_points')->onDelete('cascade');
            $table->foreignId('currency_id')->constrained('promo_product_price_config_currencies')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('promo_product_price_config_part_groups', function (Blueprint $table) {
            $table->id();
            $table->string('part_group');
            $table->string('part_group_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_price_configurations');
        Schema::dropIfExists('promo_product_price_config_colors');
        Schema::dropIfExists('promo_product_price_config_decoration_methods');
        Schema::dropIfExists('promo_product_price_config_decoration_colors');
        Schema::dropIfExists('promo_product_price_config_decorations');
        Schema::dropIfExists('promo_product_price_config_fob_points');
        Schema::dropIfExists('promo_product_price_config_currencies');
        Schema::dropIfExists('promo_product_price_config_locations');
        Schema::dropIfExists('promo_product_price_config_product_fob');
        Schema::dropIfExists('promo_product_price_config_parts');
        Schema::dropIfExists('promo_product_price_config_part_prices');
        Schema::dropIfExists('promo_product_price_config_charges');
        Schema::dropIfExists('promo_product_price_config_charge_prices');
        Schema::dropIfExists('promo_product_price_config_product_locations');
        Schema::dropIfExists('promo_product_price_config_decoration_charges');
        Schema::dropIfExists('promo_product_price_config_decoration_units');
        Schema::dropIfExists('promo_product_price_config_default_decorations');
        Schema::dropIfExists('promo_product_price_config_fob_currency');
        Schema::dropIfExists('promo_product_price_config_part_groups');
    }
};
