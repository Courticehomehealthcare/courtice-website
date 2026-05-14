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
        Schema::table('dynamic_contents', function (Blueprint $table) {
            $table->string('flyer_tagline')->nullable()->default('Exclusive Savings');
            $table->string('flyer_title')->nullable()->default('Check Our Monthly Flyer for Exceptional Deals');
            $table->text('flyer_description')->nullable();
            $table->string('flyer_image')->nullable();
            $table->string('flyer_pdf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dynamic_contents', function (Blueprint $table) {
            $table->dropColumn(['flyer_tagline', 'flyer_title', 'flyer_description', 'flyer_image', 'flyer_pdf']);
        });
    }
};
