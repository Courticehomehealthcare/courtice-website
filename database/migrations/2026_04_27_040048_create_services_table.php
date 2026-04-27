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
        Schema::create('services', function (Blueprint $table) {
            $table->integer('Serviceid');
            $table->string('bannervideourl', 255)->nullable()->default('NULL');
            $table->string('youtubevideo', 150)->nullable()->default('NULL');
            $table->string('bannertitle', 200)->nullable()->default('NULL');
            $table->string('pagecategory', 100);
            $table->string('pagesubcategory', 200)->nullable()->default('NULL');
            $table->string('serviceuid', 25);
            $table->string('ServicesTitle', 60);
            $table->string('seo_title', 255)->nullable()->default('NULL');
            $table->string('seo_description', 300)->nullable()->default('NULL');
            $table->string('seo_keywords', 500)->nullable()->default('NULL');
            $table->string('seo_image', 255)->nullable()->default('NULL');
            $table->string('canonical_url', 255)->nullable()->default('NULL');
            $table->string('og_title', 255)->nullable()->default('NULL');
            $table->string('og_description', 300)->nullable()->default('NULL');
            $table->string('og_image', 255)->nullable()->default('NULL');
            $table->string('twitter_title', 255)->nullable()->default('NULL');
            $table->string('twitter_description', 300)->nullable()->default('NULL');
            $table->string('twitter_image', 255)->nullable()->default('NULL');
            $table->text('ServicesText');
            $table->string('servicesUrl', 100);
            $table->string('other', 200);
            $table->date('servicesdate');
            $table->string('navbartext', 200);
            $table->string('serviceimage', 255)->nullable()->default('NULL');
            $table->string('icon', 255)->nullable()->default('NULL');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
