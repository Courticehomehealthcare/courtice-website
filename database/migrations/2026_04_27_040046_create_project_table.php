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
        Schema::create('project', function (Blueprint $table) {
            $table->string('projectname', 100);
            $table->integer('projectid');
            $table->string('projectuid', 25);
            $table->text('description')->nullable();
            $table->text('shortdescription')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('projecturl', 200);
            $table->integer('status');
            $table->date('completeddate')->nullable();
            $table->text('requirements')->nullable();
            $table->string('clientname', 100)->nullable();
            $table->text('other')->nullable();
            $table->string('image1', 255)->nullable();
            $table->string('image2', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
