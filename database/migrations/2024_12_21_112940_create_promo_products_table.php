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
        Schema::create('promo_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('brand');
            $table->boolean('export');
            $table->timestamp('last_change_date');
            $table->timestamp('creation_date');
            $table->timestamp('end_date');
            $table->boolean('is_caution');
            $table->text('caution_comment');
            $table->boolean('is_closeout');
            $table->string('line_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_products');
    }
};
