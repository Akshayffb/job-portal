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
        Schema::create('promo_product_media_class_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id')->constrained('promo_medias')->onDelete('cascade');
            $table->integer('class_type_id');
            $table->string('class_type_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_media_class_types');
    }
};
