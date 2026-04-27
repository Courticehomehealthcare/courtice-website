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
        Schema::create('dynamic_contents', function (Blueprint $table) {
            $table->id();
            $table->string('logoimage', 255)->nullable()->default('NULL');
            $table->string('facebook_link', 255)->nullable()->default('NULL');
            $table->string('twitter_link', 255)->nullable()->default('NULL');
            $table->string('linkedin_link', 255)->nullable()->default('NULL');
            $table->string('instagram_link', 255)->nullable()->default('NULL');
            $table->string('phone_number', 15)->nullable()->default('NULL');
            $table->string('email', 255)->nullable()->default('NULL');
            $table->string('address', 255)->nullable()->default('NULL');
            $table->string('copyrightyear', 200)->nullable()->default('NULL');
            $table->string('companyname', 150)->nullable()->default('NULL');
            $table->string('operating_hours', 150)->nullable()->default('NULL');
            $table->string('description', 300)->nullable()->default('NULL');
            $table->string('favicon', 255)->nullable()->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_contents');
    }
};
