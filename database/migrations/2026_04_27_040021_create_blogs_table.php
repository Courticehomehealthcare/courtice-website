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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('category', 100);
            $table->text('shortdescription')->nullable();
            $table->string('blogurl', 150)->nullable();
            $table->timestamp('last_updated');
            $table->string('image1', 255)->nullable();
            $table->string('image2', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('draft');
            $table->string('writtenby', 50)->nullable();
            $table->integer('visible');
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 300)->nullable();
            $table->string('seo_keywords', 500)->nullable();
            $table->string('seo_image', 255)->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->string('og_title', 255)->nullable();
            $table->string('og_description', 300)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->string('twitter_title', 255)->nullable();
            $table->string('twitter_description', 300)->nullable();
            $table->string('twitter_image', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
