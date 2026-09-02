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
        Schema::create('team', function (Blueprint $table) {
            $table->string('name', 100);
            $table->string('qualification', 100);
            $table->string('profilephoto', 255)->nullable();
            $table->string('bannerimage', 255)->nullable();
            $table->text('career')->nullable();
            $table->text('description');
            $table->string('experience', 50)->nullable();
            $table->string('instagramlink', 300)->nullable();
            $table->string('facebooklink', 300)->nullable();
            $table->string('twitterlink', 300)->nullable();
            $table->string('linkedinlink', 300)->nullable();
            $table->string('contactno', 100)->nullable();
            $table->id();
            $table->string('email', 100)->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
