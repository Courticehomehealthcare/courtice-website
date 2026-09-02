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
        Schema::create('galleryimages', function (Blueprint $table) {
            $table->integer('galleryid');
            $table->string('imagetype', 200)->nullable();
            $table->string('image_path', 255);
            $table->string('image_name', 255)->nullable();
            $table->string('project_link', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleryimages');
    }
};
