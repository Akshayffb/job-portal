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
        Schema::create('promo_product_part_dimensions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_part_id')->constrained('promo_product_parts')->onDelete('cascade');
            $table->string('dimension_uom');
            $table->decimal('depth', 8, 2);
            $table->decimal('height', 8, 2);
            $table->decimal('width', 8, 2);
            $table->string('weight_uom');
            $table->decimal('weight', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_part_dimensions');
    }
};
