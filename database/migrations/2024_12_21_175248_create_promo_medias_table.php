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
        Schema::create('promo_medias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('promo_products')->onDelete('cascade');
            $table->string('part_id');
            $table->text('url');
            $table->string('media_type');
            $table->integer('file_size');
            $table->decimal('width');
            $table->decimal('height');
            $table->string('dpi');
            $table->string('color');
            $table->text('description');
            $table->boolean('single_part');
            $table->timestamp('change_time_stamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_medias');
    }
};
