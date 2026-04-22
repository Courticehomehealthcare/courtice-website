<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $col) {
            $col->id();
            $col->string('categoriename')->unique();
            $col->string('slug')->unique();
            $col->text('description')->nullable();
            $col->string('image')->nullable();
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
        Schema::dropIfExists('categories');
    }
};
