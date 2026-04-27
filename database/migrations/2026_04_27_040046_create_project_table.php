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
            $table->text('description')->nullable()->default('NULL');
            $table->text('shortdescription')->nullable()->default('NULL');
            $table->string('location', 100)->nullable()->default('NULL');
            $table->string('projecturl', 200);
            $table->integer('status');
            $table->date('completeddate')->nullable()->default('NULL');
            $table->text('requirements')->nullable()->default('NULL');
            $table->string('clientname', 100)->nullable()->default('NULL');
            $table->text('other')->nullable()->default('NULL');
            $table->string('image1', 255)->nullable()->default('NULL');
            $table->string('image2', 255)->nullable()->default('NULL');
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
