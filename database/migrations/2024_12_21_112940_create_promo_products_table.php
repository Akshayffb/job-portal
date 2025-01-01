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
        // Product
        Schema::create('promo_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id', 64)->unique();
            $table->string('product_name', 256);
            $table->text('description')->nullable();
            $table->date('price_expires_date')->nullable();
            $table->string('product_brand');
            $table->boolean('export')->nullable();
            $table->date('last_change_date');
            $table->date('creation_date');
            $table->date('end_date')->nullable();
            $table->date('effective_date')->nullable();
            $table->boolean('is_caution');
            $table->text('caution_comment')->nullable();
            $table->boolean('is_closeout');
            $table->string('line_name', 64)->nullable();
            $table->string('primary_image_url', 1024)->nullable();
            $table->boolean('compliance_info_available')->nullable();
            $table->integer('unspsc_commodity_code')->nullable();
            $table->string('imprint_size', 256)->nullable();
            $table->text('default_setup_charge')->nullable();
            $table->text('default_run_charge')->nullable();
            $table->dateTime('last_change_date');
            $table->timestamps();
        });

        // Product Location Decoration
        Schema::create('promo_product_location_decoration', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('location_name', 255);
            $table->integer('max_imprint_colors')->nullable();
            $table->string('decoration_name', 64);
            $table->boolean('location_decoration_combo_default');
            $table->boolean('price_includes');
            $table->timestamps();
        });

        // Product Marketing Points
        Schema::create('promo_product_marketing_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('point_type', 64)->nullable();
            $table->string('point_copy');
            $table->timestamps();
        });

        // Product Keyword
        Schema::create('promo_product_keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->text('keyword');
            $table->timestamps();
        });

        // Product Categories
        Schema::create('promo_product_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('category', 256);
            $table->string('sub_category', 256)->nullable();
            $table->timestamps();
        });

        // Related Products
        Schema::create('promo_related_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->foreignId('part_id')->constrained('promo_product_parts')->onDelete('cascade'); //doubt
            $table->string('product_part_id', 64);
            $table->string('relation_type', 64);
            $table->timestamps();
        });

        // Promo Product Part
        Schema::create('promo_product_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_id', 64)->unique();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('country_of_origin', 2)->nullable();
            $table->string('primary_material', 64)->nullable();
            $table->string('shape', 64)->nullable();
            $table->integer('lead_time')->nullable();
            $table->string('unspsc', 8)->nullable();
            $table->string('gtin', 14)->nullable();
            $table->boolean('is_rush_service');
            $table->date('end_date')->nullable();
            $table->date('effective_date')->nullable();
            $table->boolean('is_closeout');
            $table->boolean('is_caution');
            $table->text('caution_comment')->nullable();
            $table->decimal('nmfc_code')->nullable();
            $table->text('nmfc_description')->nullable();
            $table->string('nmfc_number', 64)->nullable();
            $table->boolean('is_on_demand');
            $table->boolean('is_hazmat');
            $table->string('primary_color')->nullable(); // doubt object
            $table->timestamps();
        });

        // Product Price Group
        Schema::create('promo_product_price_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('group_name', 64);
            $table->string('currency', 64);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Product Price
        Schema::create('promo_product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_group_id')->constrained('promo_product_price_groups')->onDelete('cascade');
            $table->integer('quantity_max');
            $table->integer('quantity_min');
            $table->decimal('price');
            $table->string('discount_code', 5)->nullable();
            $table->timestamps();
        });

        // Product FOB Points
        Schema::create('promo_product_fob_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('fob_id', 64);
            $table->string('fob_postal_code', 64);
            $table->string('fob_city', 64);
            $table->string('fob_state', 64);
            $table->string('fob_country', 64);
            $table->timestamps();
        });

        // Product Part Color
        Schema::create('promo_product_part_colors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('color_name', 64);
            $table->string('hex', 64)->nullable();
            $table->string('approximate_pms', 64)->nullable();
            $table->string('standard_color_name', 64)->nullable();
            $table->timestamps();
        });

        // Product Part Specification
        Schema::create('promo_product_part_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('specification_type', 64);
            $table->string('specification_uom', 64);
            $table->string('measurement_value', 64);
            $table->timestamps();
        });

        // Product Part Apparel Size
        Schema::create('promo_product_part_apparel_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('apparel_style', 64);
            $table->string('label_size', 2);
            $table->string('custom_size', 64)->nullable();
            $table->timestamps();
        });

        // Product Part Dimension
        Schema::create('promo_product_part_dimensions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('dimension_uom', 2);
            $table->decimal('depth')->nullable();
            $table->decimal('height')->nullable();
            $table->decimal('width')->nullable();
            $table->string('weight_uom', 2);
            $table->decimal('weight')->nullable();
            $table->timestamps();
        });

        // Product Part Packaging
        Schema::create('promo_product_packagings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->boolean('default');
            $table->string('package_type', 256);
            $table->text('description')->nullable();
            $table->decimal('quantity');
            $table->string('dimension_uom', 2);
            $table->decimal('depth')->nullable();
            $table->decimal('height')->nullable();
            $table->decimal('width')->nullable();
            $table->string('weight_uom', 2);
            $table->decimal('weight')->nullable();
            $table->timestamps();
        });

        // Product Part Shipping Package
        Schema::create('promo_product_shipping_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('package_type', 256);
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->string('dimension_uom', 2);
            $table->decimal('depth')->nullable();
            $table->decimal('height')->nullable();
            $table->decimal('width')->nullable();
            $table->string('weight_uom', 2);
            $table->decimal('weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_products');
        Schema::dropIfExists('promo_product_location_decoration');
        Schema::dropIfExists('promo_product_marketing_points');
        Schema::dropIfExists('promo_product_keywords');
        Schema::dropIfExists('promo_product_categories');
        Schema::dropIfExists('promo_related_products');
        Schema::dropIfExists('promo_product_parts');
        Schema::dropIfExists('promo_product_price_groups');
        Schema::dropIfExists('promo_product_prices');
        Schema::dropIfExists('promo_product_fob_points');
        Schema::dropIfExists('promo_product_part_colors');
        Schema::dropIfExists('promo_product_part_specifications');
        Schema::dropIfExists('promo_product_part_apparel_sizes');
        Schema::dropIfExists('promo_product_part_dimensions');
        Schema::dropIfExists('promo_product_packagings');
        Schema::dropIfExists('promo_product_shipping_packages');
    }
};
