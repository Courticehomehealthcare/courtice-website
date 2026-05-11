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
        Schema::create('sitemap_urls', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->date('lastmod')->nullable();
            $table->string('changefreq')->default('weekly');
            $table->decimal('priority', 2, 1)->default(0.8);
            $table->boolean('is_active')->default(true);
            $table->string('source')->nullable(); // e.g., 'blog', 'service', 'manual'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitemap_urls');
    }
};
