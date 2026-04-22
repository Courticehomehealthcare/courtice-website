<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $col) {
            $col->id();
            $col->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $col->string('name');
            $col->string('slug')->unique();
            $col->string('price')->nullable();
            $col->text('short_description')->nullable();
            $col->longText('description')->nullable();
            $col->string('sku')->nullable();
            $col->string('main_image')->nullable();
            $col->integer('status')->default(1);
            
            // SEO
            $col->string('seo_title')->nullable();
            $col->text('seo_description')->nullable();
            $col->text('seo_keywords')->nullable();
            $col->string('seo_image')->nullable();
            
            $col->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
