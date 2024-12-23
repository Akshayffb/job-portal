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
        Schema::create('promo_product_medias', function (Blueprint $table) {
            $table->id();
            $table->foreign('product_id')->references('id')->on('promo_products')->onDelete('cascade');
            $table->foreign('part_id')->references('id')->on('promo_product_parts')->onDelete('cascade');
            $table->text('url');
            $table->string('media_type');
            $table->integer('file_size');
            $table->decimal('width');
            $table->decimal('height');
            $table->integer('dpi');
            $table->string('color');
            $table->boolean('single_part');
            $table->timestamp('change_timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_product_medias_');
    }
};
