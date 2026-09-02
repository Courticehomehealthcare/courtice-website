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
        Schema::create('events', function (Blueprint $table) {
            $table->integer('eventid');
            $table->string('bannertitle', 300)->nullable();
            $table->string('bannerimage', 300)->nullable();
            $table->string('eventuid', 25);
            $table->string('eventname', 300);
            $table->string('title', 300);
            $table->date('eventdate');
            $table->string('location', 300)->nullable();
            $table->string('link', 300)->nullable();
            $table->text('description');
            $table->string('eventtype', 200);
            $table->string('other', 500)->nullable();
            $table->string('image1', 200);
            $table->string('image2', 200);
            $table->boolean('status')->nullable()->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
